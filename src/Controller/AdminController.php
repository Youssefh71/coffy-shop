<?php

class AdminController {

    public function login() {

        $mypass = '0000';
        $pass = null;



        if (isset($_POST) && !empty($_POST)) {
            $pass = $_POST['code'];
            //  var_dump($pass);
            
            if ($pass === $mypass) {
                $_SESSION['admin'] = ['role'=> 'ROLE_ADMIN'];
                header('Location: /list');
            } 
        }
        require_once __DIR__ . '../../../templates/login.php';
    }


    public function logout(){
        unset($_SESSION['admin']);
        session_unset();
        header('Location: /list');
    }
}