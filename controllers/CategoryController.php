<?php

class CategoryController {

    function index(){
        $category = new Category();
        $categories = $category->all();
        new View("category.index",compact('categories'));
    }

}