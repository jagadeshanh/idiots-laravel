<?php

class Product extends Model {

    function __construct()
    {
        parent::__construct();
        $this->setTable('products');
    }

}