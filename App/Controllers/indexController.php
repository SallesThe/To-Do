<?php 
    namespace App\Controllers;
    class indexController 
    {
        private $view;

        public function __construct()
        {
            $this->view = new \stdClass;
        }

        public function login(): void
        {
            $this->render('login');
        }

        public function subscribe(): void
        {
            $this->render('subscribe');
        }

        public function render($view, $layout = 'layout'): void
        {
            $this->view->page = $view;

            if(file_exists("../app/views/$layout.phtml"))
            {
                require_once "../app/views/$layout.phtml";
            } else {
                $this->content();
            }
        }

        public function content(): void
        {
            $currentClass = get_class($this);
            $currentClass = str_replace('App\\Controllers\\', '', $currentClass);
            $currentClass = str_replace('Controller', '', $currentClass);
            require_once "../app/views/$currentClass/" . $this->view->page . ".phtml";
        }


    }
?>