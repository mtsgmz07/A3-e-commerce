<?php

namespace App\Controllers;

use PDO;
use PDOException;

class Database
{
    private static $instance = null;
    private $connection;

    private $host = "mysql";
    private $dbname = "exo";
    private $username = "mts";
    private $password = "root";

    // Constructeur privé pour empêcher l'instanciation directe
    private function __construct()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
        }
    }

    // Méthode pour obtenir l'instance unique
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Méthode pour obtenir la connexion PDO
    public function getConnection()
    {
        return $this->connection;
    }

    public function read($table, $fields, $conditions)
    {
        try {
            $formattedFields = count($fields) > 0 ? implode(", ", array_values($fields)) : "*";
            $sql = strlen($conditions) <= 0 ?  "SELECT $formattedFields FROM $table" : "SELECT $formattedFields FROM $table WHERE $conditions";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            die("Erreur lors de la sélection :" . $e->getMessage());
        };
    }

    public function delete($table, $conditions)
    {
        try {
            $sql = strlen($conditions) <= 0 ?  "DELETE FROM $table" : "DELETE FROM $table WHERE $conditions";
            $stmt = $this->connection->prepare($sql);
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            die("Erreur lors de la suppression :" . $e->getMessage());
        };
    }

    public function create($table, $data): void
    {
        try {
            if (empty($data)) throw new PDOException("Le paramètre data doit être un tableau");
            $keyInsert = implode(", ", array_keys($data));
            $keyInsertFormated = implode(", ", array_map(fn($key) => ":" . $key, array_keys($data)));
            $sql = "INSERT INTO $table ($keyInsert) VALUES ($keyInsertFormated)";
            $stmt = $this->connection->prepare($sql);
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
        } catch (PDOException $e) {
            die("Erreur lors de l'insertion :" . $e->getMessage());
        }
    }

    public function update($table, $fields, $conditions):bool
    {
        try {
            if (empty($fields)) throw new PDOException("Le paramètre fields doit être un tableau");
            $keyInsertFormated = implode(", ", array_map(fn($key) => $key . " = :" . $key, array_keys($fields)));
            $sql = strlen($conditions) <= 0 ?  "UPDATE $table SET $keyInsertFormated" : "UPDATE $table SET $keyInsertFormated WHERE $conditions";
            $stmt = $this->connection->prepare($sql);
            foreach ($fields as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            die("Erreur lors la modification :" . $e->getMessage());
        }
    }
}
