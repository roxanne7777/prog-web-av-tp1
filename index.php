<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('Classes/Reservation.php');

$reservation = new Reservation();
$reservations = $reservation->getDetailsReservation();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Liste des réservations</h1>
    <table>
        <tr>
            <th>Client</th>
            <th>Numéro de téléphone</th>
            <th>Restaurant</th>
            <th>Table</th>
            <th>Date</th>
            <th>Heure</th>
            <th>Nombre de personnes</th>
        </tr>

        <?php
        foreach($reservations as $row){
        ?>

            <tr>
                <td><?= $row['client_nom']?></td>
                <td><?= $row['client_telephone']?></td>
                <td><?= $row['restaurant_nom']?></td>
                <td><?= $row['table_id']?></td>
                <td><?= $row['date_reservation']?></td>
                <td><?= $row['heure_reservation']?></td>
                <td><?= $row['nombre_personnes']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <a href="reservation-create.php" class="btn">Faire une réservation</a>
</body>
</html>
