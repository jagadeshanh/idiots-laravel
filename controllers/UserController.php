<?php

class UserController{

    function index(){
        $user = new User();
        $users = $user->all();
        new View('user.index',compact('users'));
    }

}