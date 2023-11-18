<?php
session_start();
//connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Tp_address";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("la connexion à la base de données a échoué :" .$conn->connect_error);
}
// inserer les données dans la base de données
if (isset($_SESSION['addresses'])) {
    foreach ($_SESSION['addresses'] as $addresse) {
        $street = $conn->real_escape_string($address['street']);
        $street_nb = (int)$address['street_nb'];
        $type = $conn->real_escape_string($address['type']);
        $city = $conn->real_escape_string($address['city']);
        $zipcode = $conn->real_escape_string($address['zipcode']);
        
        $sql = "INSERT INTO addresses (street, street_nb, type, city, zipcode) VALUES ('$street', $street_nb, '$type', '$city', '$zipcode')";

        if ($conn->query($sql) !== TRUE) {
            echo "Erreur lors de l'insertion des données : " . $conn->error;
        }
    }
    
}