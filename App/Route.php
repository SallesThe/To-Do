<?php 
    namespace App;
    class Route
    {
        protected $routes;

        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getRequestUri());

        }

        public function getRoutes()
        {
            return $this->routes;
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

            $this->setRoutes($routes);
        }

        public function run($requestUri): void
        {
            foreach ($this->getRoutes() as $path => $route) {
                if($requestUri == $route)
                {
                    $class = "App\\Controllers\\" . $route['controller'];
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        public function setRoutes(array $routes)
        {
            $this->routes = $routes;
        }

        public function getRequestUri()
        {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>