<?php 
    namespace MF\Controller;
    abstract class action
    {
        protected $view;

        public function __construct()
        {
            $this->view = new \stdClass;
        }
        protected function render($view, $layout = 'layout'): void
        {
            $this->view->page = $view;

            if(file_exists("../app/views/$layout.phtml"))
            {
                require_once "../app/views/$layout.phtml";
            } else {
                $this->content();
            }
        }

        protected function content(): void
        {
            $currentClass = get_class($this);
            $currentClass = str_replace('App\\Controllers\\', '', $currentClass);
            $currentClass = str_replace('Controller', '', $currentClass);
            require_once "../app/views/$currentClass/" . $this->view->page . ".phtml";
        }
    }
?>