<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['addresses'] = array();

    for ($i = 1; $i <= $_SESSION['num_addresses']; $i++) {
        $street = $_POST["street$i"];
        $street_nb = $_POST["street_nb$i"];
        $type = $_POST["type$i"];
        $city = $_POST["city$i"];
        $zipcode = $_POST["zipcode$i"];

        $_SESSION['addresses'][$i] = [
            'street' => $street,
            'street_nb' => $street_nb,
            'type' => $type,
            'city' => $city,
            'zipcode' => $zipcode,
        ];
    }

    header("Location: connection-bd.php");
    exit();
}
?>