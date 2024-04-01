<?php

namespace Controllers;

abstract class Controller
{
    protected  $modelDetail;
    protected  $modelName;
    protected  $model;

    public function  __construct() 
    {
        $this->model = new $this->modelName();
    }
}