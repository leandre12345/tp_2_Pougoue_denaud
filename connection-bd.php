<?php
session_start();

// Connexion à la base de données
$servername = "votre_serveur";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "votre_nom_de_base_de_donnees";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Insérer les données dans la base de données
if (isset($_SESSION['addresses'])) {
    foreach ($_SESSION['addresses'] as $address) {
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

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adresses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="display">
        <h2>Informations d'adresse</h2>
        <?php
        if (isset($_SESSION['addresses'])) {
            foreach ($_SESSION['addresses'] as $key => $address) {
                echo "<p><strong>Adresse $key:</strong><br>";
                echo "Street: {$address['street']}<br>";
                echo "Street Number: {$address['street_nb']}<br>";
                echo "Type: {$address['type']}<br>";
                echo "City: {$address['city']}<br>";
                echo "Zip Code: {$address['zipcode']}</p>";
            }
        }
        ?>
    </div>
</body>
</html>
