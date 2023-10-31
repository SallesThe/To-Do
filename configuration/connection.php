<?php 
    class Connect
    {
        private $db_name = "toDo";
        private $server_name = "localhost";
        private $user_name = "root";
        private $password = "";
        public function __construct()
        {
            try {
                $conn = new PDO("mysql:host=$this->server_name;dbname=$this->db_name", $this->user_name, $this->password);
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }

    $conn = new Connect;
?>