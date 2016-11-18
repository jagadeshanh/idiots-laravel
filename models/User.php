<?php

class User extends Model {

    function __construct()
    {
        parent::__construct();
        $this->setTable('users');
    }

}