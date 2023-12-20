<?php 
    namespace App\Models;
    use MF\Model\Model;

    class User extends Model
    {
        public function getUser(): array
        {
            $query = "SELECT * FROM tb_produtos";
            return $this->database->query($query)->fetchAll();
        }
    }
?>