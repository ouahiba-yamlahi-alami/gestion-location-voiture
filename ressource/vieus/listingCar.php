<?php
$titre= "Listing Cars";

ob_start();
?>
    <a href="index.php?action=createCar" class="btn btn-primary">Insert Car</a>
    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Matricule</th>
            <th>Modele_date</th>
            <th>Marque</th>
            <th>Model</th>

        </tr>
        </thead>
        <tbody>
        <?php
        /** @var \App\modele\car[] $data */
        foreach ($data as $car): ?>
            <tr>
                <td><?= $car->getId() ?></td>
                <td><?= $car->getMatricule() ?></td>
                <td><?= $car->getModele_Date() ?></td>
                <td><?= $car->getMarque() ?></td>
                <td><?= $car->getModel()  ?></td>




            </tr>
        <?php endforeach;?>
        </tbody>




    </table>

<?php $contenu= ob_get_clean()?>



<?php include "layout.php"; ?>