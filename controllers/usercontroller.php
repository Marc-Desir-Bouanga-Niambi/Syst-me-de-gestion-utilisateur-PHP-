<?php
class UserController {

    public function login () {
        require 'views/login.php';
    }

    public function register() {
        require 'views/register.php';
    }

    public function profile() {
        require 'views/profile.php';
    }
}

?>