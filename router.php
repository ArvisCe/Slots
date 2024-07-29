<?php
    get_route();
    function get_route()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = substr($uri, 1);
        if($uri == "")
        {
            require 'routes/home.php';
        }
        else
        {
            require "routes/$uri.php";
        }
    }
    function get_image($path)
    {
        
    }
    function get_style_sheet($path)
    {

    }
    function get_script($path)
    {

    }
?>