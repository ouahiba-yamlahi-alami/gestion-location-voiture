<?php

namespace App\controller;

use App\modele\tenant;

class tenantController extends basicController
{
/**
* @return tenant
*/
    public static function getModel()
    {
        if(is_null(static::$model)){
            static::$model = new tenant();
        }
        return static::$model;
    }


    public static function indexAction()
    {
        // models (les donnees)

        $tenants = static::getModel()->latest();


        // vieus (afficher les donnees)

        static::view('listingTenant',$tenants);
    }

    public static function createAction()
    {
        static::view('createTenant');
    }
    public static function storeActionTenant()
    {

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($_POST['cin']) && isset($_POST['firstname'])&& isset($_POST['lastname'])&& isset($_POST['birthdate'])&& isset($_POST['driving_number'])){
                if(!empty($_POST['cin']) && !empty($_POST['firstname'])  && !empty($_POST['lastname'])  && !empty($_POST['birthdate'])&& !empty($_POST['driving_number'])){
                    $cin= htmlspecialchars($_POST['cin']);
                    $firstname = htmlspecialchars($_POST['firstname']);
                    $lastname= htmlspecialchars($_POST['lastname']);
                    $birthdate=htmlspecialchars($_POST['birthdate']);
                    $driving_number=htmlspecialchars($_POST['driving_number']);
                    $created = static::getModel()
                        ->setCin($cin)
                        ->setFirstname($firstname)
                        ->setLastname($lastname)
                        ->setBirthdate($birthdate)
                        ->setDriving_number($driving_number)
                        ->create();
                    if($created){
                        header('location:index.php?action=listingTenant');
                    }
                }else{
                    echo ' les champs sont obligatoir';
                }
            }
        }
    }

}