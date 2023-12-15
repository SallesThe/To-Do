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

            $routes['register'] = array(
                'route' => '/register',
                'controller' => 'indexController',
                'action' => 'register'
            );

            return $this->setRoutes($routes);
        }

        public function setRoutes($routes)
        {
            $this->routes = $routes;
        }


    }
?>