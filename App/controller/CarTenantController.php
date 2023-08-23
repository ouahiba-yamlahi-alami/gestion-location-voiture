<?php

namespace App\controller;


use App\modele\CarTenant;

class CarTenantController extends basicController
{
    /**
     * @return CarTenant
     */
    public static function getModel()
    {
        if(is_null(static::$model)){
            static::$model = new CarTenant();
        }
        return static::$model;
    }
    public function __construct(){
        $this->setModel(new CarTenant());

    }


    public static function getCarTenantAction()
    {
        $cars = static::getModel()->getCarTenant();
        $tenants = static::getModel()->getTenantCar();
        // vieus (afficher les donnees)

        static::view('test',$cars,$tenants);
    }
    public static function createCarTenantAction()
    {
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            $car_id=$_POST['car_id'];
            $tenant_id=$_POST['tenant_id'];
            $tenant_date=$_POST['tenant_date'];
            if(!empty($car_id) && !empty($tenant_id) && !empty($tenant_date)){
               $connected = static::getModel()
                   ->setCarId($car_id)
                   ->setTenantId($tenant_id)
                   ->setTenantDate($tenant_date)
                   ->createCarTenant();
                if($connected){

            }
       }
    }
}
}