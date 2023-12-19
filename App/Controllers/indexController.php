<?php 
    namespace App\Controllers;
    use MF\Controller\Action;
    class indexController extends Action 
    {       
        public function login(): void
        {
            $this->render('login');
        }

        public function subscribe(): void
        {
            $this->render('subscribe');
        }
    }
?>