<?php
require_once('Classes/CRUD.php');

$crud = new CRUD;

$select = $crud->select('restaurant', 'nom', 'ASC');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle réservation</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="reservation-store.php" method="post">
            <h2>Nouvelle réservation</h2>
            <label for="client_id">Nom du client :</label>
            <input type="text" id="client_id" name="client_id" required><br><br>

            <label for="telephone">Numéro de téléphone :</label>
            <input type="text" id="telephone" name="telephone" required><br><br>

            <label for="restaurant_id">Choix de restaurant :
                <select name="restaurant_id" required>
                <?php
                foreach($select  as $row) {
                ?>
                    <option value="<?= $row['id']; ?>"><?= $row['nom']; ?></option>
                <?php
                    }
                ?>
                </select>
            </label>

            <label for="date_reservation">Date de réservation :</label>
            <input type="date" id="date_reservation" name="date_reservation" required><br><br>

            <label for="heure_reservation">Heure de réservation :</label>
            <input type="time" id="heure_reservation" name="heure_reservation" required><br><br>

            <label for="nombre_personnes">Nombre de personnes :</label>
            <input type="number" id="nombre_personnes" name="nombre_personnes" required><br><br>

            <input type="submit" class="btn" value="Réserver">

        </form>
    </div>
</body>
</html>
