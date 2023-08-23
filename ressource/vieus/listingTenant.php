<?php
$titre= "Listing Tenant";

ob_start();
?>
    <a href="index.php?action=createTenant" class="btn btn-primary">Insert Tenant</a>
    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Cin</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Birthdate</th>
            <th>Driving_number</th>
        </tr>
        </thead>
        <tbody>
        <?php


        /** @var \App\modele\tenant[] $data */
            foreach ($data as $tenant): ?>
                <tr>
                    <td><?= $tenant->getId() ?></td>
                    <td><?= $tenant->getCin() ?></td>
                    <td><?= $tenant->getFirstname() ?></td>
                    <td><?= $tenant->getLastname() ?></td>
                    <td><?= $tenant->getBirthdate()  ?></td>
                    <td><?= $tenant->getDriving_number()  ?></td>

                </tr>
            <?php endforeach;
         ?>
        </tbody>

    </table>

<?php $contenu= ob_get_clean()?>



<?php include "layout.php"; ?>