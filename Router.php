<?php

namespace app;

/**
 * Class Router
  */
class Router
{
     public $getRoutes = array();
     public $postRoutes = array();

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $currentUrl = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if($method === 'get') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }        
        if ($fn) {
            echo "Page not found";
            exit;
        }
        echo call_user_func($fn, $this);
    }

    public function renderView($view) 
    {
        include_once __DIR__."/views/$view.php";
    }
}