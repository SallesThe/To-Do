<?php 
    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap
    {
        public function initRoutes(): void
        {
            $routes['login'] = array(
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'login'
            );

            $routes['subscribe'] = array(
                'route' => '/subscribe',
                'controller' => 'indexController',
                'action' => 'subscribe'
            );

            $this->setRoutes($routes);
        }
    }
?>
