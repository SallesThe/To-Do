<?php 
    namespace App;
    class Route
    {
        protected $routes;

        public function __construct()
        {
            $this->initRoutes();
        }

        public function initRoutes()
        {
            $routes['login'] = array(
                'route' => '/',
                'controler' => 'indexController',
                'action' => 'login'
            );

            return $routes;
        }


    }
?>