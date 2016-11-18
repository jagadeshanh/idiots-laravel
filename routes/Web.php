<?php

class Web
{

    protected $url;
    protected $routes;

    public function __construct($url)
    {
        $this->url = $url;
        $this->setRoutes();
        $this->processRequest();
    }

    function setRoutes()
    {
        $this->routes = [
            '/' => 'WelcomeController@index',
            '/category' => 'CategoryController@index',
            '/user' => 'UserController@index',
            '/product' => 'ProductController@index'
        ];
    }

    function getController(){
        $array = explode("@",$this->routes[$this->url]);
        return $array[0];
    }

    function getFunction(){
        $array = explode("@",$this->routes[$this->url]);
        return $array[1];

    }

    public function processRequest()
    {
        if (array_key_exists($this->url, $this->routes)) {
            $controller = $this->getController();
            $function = $this->getFunction();
            $controller = new $controller();
            $controller->$function();
        } else {
            echo "404";
        }
    }
}