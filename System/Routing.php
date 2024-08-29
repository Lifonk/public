<?php

class Router
{
    private $Classes = array();

    function addRoute($url, $path)
    {
        $this->Classes[$url] = $path;
    }

    function route($url)
    {
        $path = $this->Classes[$url];
        $file_dir = "Class/".$path;
        if($path == "")
        {
            require "404.php";
            die();
        }

        if (file_exists($file_dir))
        {
            require $file_dir;
        }
        else 
        {
            require "404.php";
            die();
        }

    }
}
?>