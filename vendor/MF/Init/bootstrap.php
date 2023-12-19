<?php 
    namespace MF\Init;
    abstract class Bootstrap
    {
        protected $routes;
        abstract protected function initRoutes();

        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getRequestUri());
        }

        public function getRoutes(): array
        {
            return $this->routes;
        }

        public function setRoutes($routes): void
        {
            $this->routes = $routes;
        }

        protected function run($requestURI)
        {
            foreach ($this->getRoutes() as $path => $route) 
            {
                if($requestURI == $route['route'])
                {
                    $class = "App\\Controllers\\" . $route['controller'];
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action();
                }
            }
        }

        protected function getRequestUri()
        {
            
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
?>