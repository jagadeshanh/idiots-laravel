<?php

class View{

    protected $result;
    protected $directory;
    protected $file;
    protected $view;
    protected $path;

    function __construct($view,$result)
    {
        $this->result = $result;
        $this->view = $view;
        $this->buildPath();
        $this->buildFile();
        $this->display();
    }

    function buildPath(){
        $this->path = explode(".",$this->view);
        for ($i=0; $i<count($this->path)-1; $i++){
            $this->directory = $this->directory .'/'. $this->path[$i];
        }
    }

    function buildFile(){
        $this->file = $this->path[count($this->path)-1] . '.php';
    }

    function display(){
        include(ltrim($this->directory.'/'.$this->file, '/'));
    }

}