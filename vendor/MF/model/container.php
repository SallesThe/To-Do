<?php 
    namespace MF\Model;
    use App\Connection;
    class Container 
    {
        public static function getModel(String $model): Object
        {
            $class = "App\\Models\\" . ucfirst($model);
            var_dump($class);
            $conn = Connection::Connect();
            var_dump($conn);
            return new $class($conn);
        }
    }
?>