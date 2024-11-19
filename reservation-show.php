<?php

if(!isset($_GET["id"]) || $_GET["id"]==null){
    header('location:index.php');
    exit;
}
require_once("Classes/CRUD.php");

$crud = new CRUD;
$selectId = $crud->selectId('reservation', $_GET["id"]);
if($selectId){
   extract($selectId);
}else{
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Show</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Réservation</h1>
        <p><strong>Nom : </strong><?= $client_id;?></p>
        <p><strong>Restaurant : </strong><?= $restaurant_id;?></p>
        <p><strong>Date : </strong><?= $date_reservation;?></p>
        <p><strong>Heure : </strong><?= $heure_reservation;?></p>
        <p><strong>Nombre de personnes : </strong> <?= $nombre_personnes?> </p>
        <a href="reservation-edit.php?id=<?= $selectId['id'];?>" class="btn">Modifier</a>
        <form action="reservation-delete.php" method="post">
        <input type="hidden" name="id" value="<?= $selectId['id']; ?>">
            <button type="submit" class="btn red">Supprimer</button>
        </form>
    </div>
</body>
</html>