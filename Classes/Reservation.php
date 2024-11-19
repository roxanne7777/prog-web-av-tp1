<?php
require_once('CRUD.php');

class Reservation {
    private $crud;

    public function __construct(){
        $this->crud = new CRUD;
    }

    public function getDetailsReservation() {
        $sql = "SELECT reservation.*, client.nom AS client_nom, client.telephone AS client_telephone, restaurant.nom AS restaurant_nom
                FROM reservation
                JOIN client ON reservation.client_id = client.id
                JOIN restaurant ON reservation.restaurant_id = restaurant.id
                ORDER BY client.nom ASC";
                
        $stmt = $this->crud->query($sql); 
        return $stmt->fetchAll();
    }
}