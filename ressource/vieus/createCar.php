<?php

$titre= "Create Car";

ob_start();
?>
    <form action="index.php?action=storeActionCar" method="post">
        <div>
            <label>Matricule</label>
            <input type="text" class="form-control" name="matricule" >
        </div>
        <div class="form-group">
            <label>Modele_date</label>
            <input type="number" class="form-control" name="modele_date" >
        </div>
        <div>
            <label>Marque</label>
            <input type="text" class="form-control" name="marque" >
        </div>

        <div>
            <label>Model</label>
            <input type="text" class="form-control" name="model" >
        </div>

        <div class="form-group">

            <input type="submit" class="btn btn-success my-2" value="createCar" name="createCar" >
        </div>

    </form>

<?php $contenu= ob_get_clean()?>
<?php include "layout.php";