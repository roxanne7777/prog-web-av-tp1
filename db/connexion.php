<?php
try {
    $dbhost = 'localhost';
    $dbname = 'e2495441';
    $dbuser = 'e2495441';
    $dbpass = 'CFtnBPaxnO7mz8yGxI1Z';
    $dbport = 3306;
    
    $pdo = new PDO("mysql:host=$dbhost; dbname=$dbname; port=$dbport; charset=utf8", $dbuser, $dbpass);
} catch (PDOException $e) {
    
    echo "Error : " . $e->getMessage();
    die();
}

?>
