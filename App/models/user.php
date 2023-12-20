<?php 
    namespace App\Models;
    use MF\Model\Model;

    class User extends Model
    {
        public function getUser(): array
        {
            $query = "SELECT * FROM tb_produtos";
            $res = $this->database->query($query)->fetchAll();
            return $res;
        }
    }
?>