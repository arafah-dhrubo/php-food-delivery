<?php

class Database
{
    private $dbUser = "user";
    private $dbPassword = "password";
    private $dbName = "student";
    private $dbHost = "localhost";
    private $table = "list";
    private $pdo;

    public function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=" . $this->dbHost . ";dbname=" . $this->dbName . ";charset=UTF8", $this->dbUser, $this->dbPassword);
            if ($this->pdo) {
                echo "Successfully connected";
            }
        } catch (PDOException $e) {
            die("Failed to connect with database" . $e->getMessage());
        }
    }

    //Reading data
    public function read()
    {
        $sql = "SELECT * FROM $this->table";
        $statement = $this->pdo->query($sql);
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
//        echo '<pre>';
//        var_dump($result);
//        echo '<pre/>';

        return $result;
    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
