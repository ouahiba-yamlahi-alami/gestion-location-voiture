<?php


$titre="TenantCar";

use App\modele\TenantCar;
ob_start();


?>

    <form action="index.php?action=test" method="POST">
        <div>
            <select name="car_id" class="form-control" >
                <option value="">chousse your cars </option>
                <?php
                /** @var \App\modele\car[] $data */
                foreach ($data as $car){
                    echo "<option value='".$car['id'] ."'>".$car['marque']."</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <select name="tenant_id" class="form-control" >
                <option value="">Name_tenant </option>
                <?php
                /** @var \App\modele\tenant[] $tenants*/
                foreach ($tenants as $tenant){
                    echo "<option value='".$tenant['id']."'>".$tenant['lastname']."</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <input type="date" name="tenant_date" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success my-2" value="save" name="save" >
        </div>
    </form>

<?php $contenu= ob_get_clean()?>
<?php include "layout.php";