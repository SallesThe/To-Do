<?php 
    namespace App\Controllers;
    // * Resources from miniFramework
    use MF\Controller\Action;

    // * Resources from Models
    use MF\Model\Container;

    class indexController extends Action 
    {
        public function login(): void
        {
            $user = Container::getModel('user');
            $users = $user->getUser();
            $this->view->date = $users;
            $this->render('login');
        }

        public function subscribe(): void
        {
            $this->render('subscribe');
        }
    }
?>