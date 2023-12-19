<?php 
    namespace App\Models;
    use App\Connection;
    class User
    {
        private $data;

        public function __construct()
        {
            
        }

        public function selectData($query): array
        {
            $str = Connection::Connect();
            $str->query($query);
            return array();
        }
    }
?>