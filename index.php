<?php

require 'vendor/autoload.php';
use App\controller\carController;
use App\controller\tenantController;
use App\controller\CarTenantController;

if(isset($_GET['action'])){
    $action= $_GET['action'];
    switch ($action){

        case 'listingCar':
            carController::indexAction();
            break;
        case 'listingTenant':
            tenantController::indexAction();
            break;
        case 'createCar':
            carController::createAction();
            break;
        case 'createTenant':
            tenantController::createAction();
            break;
        case 'storeActionCar':
            carController::storeAction();
            break;
        case 'storeActionTenant':
            tenantController::storeActionTenant();
            break;
        case 'test':
            CarTenantController::getCarTenantAction();
        case 'test':
            CarTenantController::createCarTenantAction();
            }
               }if(empty($_GET['action'])){
                        carController::indexAction();
                   }