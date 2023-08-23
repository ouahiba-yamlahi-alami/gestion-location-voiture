<?php

namespace App\modele;
use App\modele\car;
use App\modele\tenant;
use PDO;

class CarTenant extends modelClass
{
     private $car_id;
     private $tenant_id;
     private $tenant_date;

    /**
     * @return mixed
     */
    public function getCarId()
    {
        return $this->car_id;
    }

    /**
     * @param mixed $car_id
     * @return CarTenant
     */
    public function setCarId($car_id)
    {
        $this->car_id = $car_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTenantId()
    {
        return $this->tenant_id;
    }

    /**
     * @param mixed $tenant_id
     * @return CarTenant
     */
    public function setTenantId($tenant_id)
    {
        $this->tenant_id = $tenant_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTenantDate()
    {
        return $this->tenant_date;
    }

    /**
     * @param mixed $tenant_date
     * @return CarTenant
     */
    public function setTenantDate($tenant_date)
    {
        $this->tenant_date = $tenant_date;
        return $this;
    }



     public  function getCarTenant(){
        return  static::database()->query("SELECT * FROM car")->fetchAll(PDO::FETCH_ASSOC);
     }
     public  function getTenantCar(){
        return  static::database()->query("SELECT * FROM tenant")->fetchAll(PDO::FETCH_ASSOC);
     }
    public function createCarTenant()
    {

        $sqlState= static::database()->prepare("INSERT INTO car_tenant(car_id,tenant_id,tenant_date) VALUES(?,?,?)");
        return $sqlState->execute([
            $this->car_id,
            $this->tenant_id,
            $this->tenant_date
        ]);
    }
}

