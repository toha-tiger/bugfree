<?php

class UserController extends Controller{

    public function registration()
    {
        if(!empty($_POST)) {
            $user = new User();
            $user->registration($_POST);
            $this->renderView('user/registration', array('result' => $user->result));
            return;
        }
        $this->renderView('user/registration');
    }

    public function login() {
        $this->renderView('user/login');
    }

    public function profile() {
        $user = new User();
        $this->renderView('user/profile', $user->profile('1'));    
    }
} 