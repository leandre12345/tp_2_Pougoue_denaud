<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['num_addresses'])) {
        $num_addresses = (int)$_POST['num_addresses'];
        $_SESSION['num_addresses'] = $num_addresses;
        $_SESSION['addresses'] = array();
        header("Location: address-form.php");
        exit();
    }
}
?>