<?php

class Category extends Model {

    function __construct()
    {
        parent::__construct();
        $this->setTable('categories');
    }

}