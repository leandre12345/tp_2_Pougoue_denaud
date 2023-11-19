<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'Adresses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="process-addresses.php" method="post">
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
            echo "<select name='city$i' id='city$i' required>";
            echo "<option value='Montreal'>Montreal</option>";
            echo "<option value='Laval'>Laval</option>";
            echo "<option value='Toronto'>Toronto</option>";
            echo "<option value='Quebec'>Quebec</option>";
            echo "</select>";

            echo "<label for='zipcode$i'>Zip Code:</label>";
            echo "<input type='text' name='zipcode$i' id='zipcode$i' maxlength='6' required>";

            echo "<br><br>";
        }
        ?>
        <input type="submit" value="Suivant">
    </form>
</body>
</html>
