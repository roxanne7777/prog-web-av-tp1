<?php
require_once('classes/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('reservation', $_POST);

header("location:client-show.php?id=$insert");

?>