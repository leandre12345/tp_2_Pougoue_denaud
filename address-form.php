<?php
session_start();
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Formulaire d'adresses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process-addresses.php" method="post"></form>
    <h2>Saisissez vos adresses</h2>
    <?php
    for ($i = 1; $i <= $_SESSION['num_addresses']; $i++) {
        echo "<label for='street$i'>Street:</label>";
        echo "<input type='text' name='street$i' id='street$i' maxlength='50' required>";
        
        echo "<label for='street_nb$i'>Street Number:</label>";
        echo "<input type='number' name='street_nb$i' id='street_nb$i' required>";

        echo "<label for='type$i'>Type:</label>";
        echo "<select name='type$i' id='type$i' required>";
        echo "<option value='livraison'>Livraison</option>";
        echo "<option value='facturation'>Facturation</option>";
        echo "<option value='autre'>Autre</option>";
        echo "</select>";
        
        echo "<label for='city$i'>City:</label>";
    }
?>
</body>
</html>