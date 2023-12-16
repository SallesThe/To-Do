<?php 
    namespace App;
    class Connection
    {
        public function Connect(\PDO $database)
        {
            try {
                $conn = new \PDO("mysql:host=localhost;dbname=todo", "root", "");
                return $conn;
            } catch (\Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
?>