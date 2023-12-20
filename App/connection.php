<?php 
    namespace App;
    class Connection
    {
        public static function Connect(): \PDO
        {
            try {
                $conn = new \PDO("mysql:host=localhost;dbname=mvc", "root", "");
                return $conn;
            } catch (\PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
?>