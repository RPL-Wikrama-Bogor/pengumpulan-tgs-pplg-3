<?php

class App{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->perseURL();
        // controller
        if (is_array($url)) {
        if ( file_exists('../app/controller/' . $url[0] . '.php') ) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controller/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method 
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // param 
        if ( !empty($url) ) {
            $this->params = array_values($url);
        }

        }else {
            require_once "../app/controller/" . $this->controller . '.php';
            $this->controller = new $this->controller;
        }
        
        // jalankan controller dan method, serta kirimkan params jika ada 
        call_user_func_array([$this->controller, $this->method], $this->params);

    }
    public function perseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}