<?php include "partials/header.view.php"; ?>
<?php include "partials/nav.view.php"; ?>

<h1>Cars</h1>

<?php foreach($cars as $car):?>
    <?php
        $carProp = $car;
        include "partials/carCard.view.php";
    ;?>
<?php endforeach;?>
