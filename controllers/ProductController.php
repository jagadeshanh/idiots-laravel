<?php

class ProductController {

    function index(){
        $product = new Product();
        $products = $product->all();
        new View('product.index',compact('products'));
    }

}