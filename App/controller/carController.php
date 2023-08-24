<?php

namespace App\controller;

use App\modele\car;

class carController extends basicController
{
    /**
     * @return car
     */
    public static function getModel()
    {
        if(is_null(static::$model)){
            static::$model = new car();
        }
        return static::$model;
    }


    public static function indexAction()
    {
        // models (les donnees)

        $cars= static::getModel()->latest();


        // vieus (afficher les donnees)

        static::view('listingCar',$cars);
    }

    public static function createAction()
    {
        static::view('createCar');
    }
    public static function storeAction()
    {

        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            if(isset($_POST['matricule']) && isset($_POST['modele_date'])&& isset($_POST['marque'])&& isset($_POST['model'])){
                if(!empty($_POST['matricule']) && !empty($_POST['modele_date'])  && !empty($_POST['marque'])  && !empty($_POST['model'])){
                    $matricule= htmlspecialchars($_POST['matricule']);
                    $modele_date = htmlspecialchars($_POST['modele_date']);
                    $marque= htmlspecialchars($_POST['marque']);
                    $model=htmlspecialchars($_POST['model']);

                    $created = static::getModel()
                        ->setMatricule($matricule)
                        ->setModele_Date($modele_date)
                        ->setMarque($marque)
                        ->setModel($model)
                        ->create();
                    if($created){
                        header('location:index.php?action=listingCar');
                    }
                }else{
                    ?>
                    <div class = "container ">
                    <div class="alert alert-danger" role="alert">
                        please complete the attached form!
                    </div>
                    <div>
                    <?php
                    static::view('createCar');
                }
            }
        }
    }


}