<?php

namespace App\modele;

use PDO;

class modelClass
{
    protected $id;

    protected static $db;

    public function getId()
    {
        return $this->id;
    }


    public static function   database(){
        if(is_null(static::$db)){
            static::$db = new PDO("mysql:host=mysql57;dbname=gestion_location_voiture","root","root");
        }
        return static::$db;
    }

}