<?php

class Controller {
    public function views($view, $data = [] )
    {
        require_once '../app/views/' .$view .'.php';
    }

    public function model($model){
        require_once '../app/model/' . $model .'.php';
        return new $model;
    }
}