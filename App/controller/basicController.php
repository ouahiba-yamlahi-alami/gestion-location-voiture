<?php

namespace App\controller;

class basicController
{
    protected static $model;


    /**
     * @param mixed $model
     */
    public static function setModel($model)
    {
        self::$model = $model;
    }


    public static function view($view,$data=null,$tenants=null)
    {
        require "ressource/vieus/" .$view. ".php";
    }
}