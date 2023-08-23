<?php
$titre= "Create Tenant";

ob_start();
?>
    <form action="index.php?action=storeActionTenant" method="post">
        <div>
            <label>Cin</label>
            <input type="text" class="form-control" name="cin" >
        </div>
        <div class="form-group">
            <label>Firstname</label>
            <input type="text" class="form-control" name="firstname" >
        </div>
        <div>
            <label>Lastname</label>
            <input type="text" class="form-control" name="lastname" >
        </div>

        <div>
            <label>Birthdate</label>
            <input type="date" class="form-control" name="birthdate" >
        </div>
        <div>
            <label>Driving_number</label>
            <input type="number" class="form-control" name="driving_number" >
        </div>
        <div class="form-group">

            <input type="submit" class="btn btn-success my-2" value="createTenant" name="createTenant" >
        </div>



    </form>


<?php $contenu= ob_get_clean()?>
<?php include "layout.php";