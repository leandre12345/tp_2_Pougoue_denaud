<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adresse Page 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="form.php" method="post">
        <h2>Combien d'adresses souhaitez-vous ajouter ?</h2>
        <label for="num_addresses">Nombre d'adresses :</label>
        <input type="number" name="num_addresses" id="num_addresses" min="1" required>
        <input type="submit" value="Suivant">
    </form>
</body>
</html>
