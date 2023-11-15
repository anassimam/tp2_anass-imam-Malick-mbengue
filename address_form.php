<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adresse Form</title>
</head>
<body>
    <div class="container">
        <form action="process_addresses.php" method="post">
            <?php
            if (isset($_GET["num_addresses"])) {
                $num_addresses = intval($_GET["num_addresses"]);
                for ($i = 1; $i <= $num_addresses; $i++) {
                    echo "<h3>Adresse $i</h3>";
                    echo "<label for='street_$i'>Street:</label>";
                    echo "<input type='text' name='street_$i' maxlength='50' required>";
                    
                    echo "<label for='street_nb_$i'>Street Number:</label>";
                    echo "<input type='number' name='street_nb_$i' required>";
                    
                    echo "<label for='type_$i'>Type:</label>";
                    echo "<select name='type_$i' required>";
                    echo "<option value='livraison'>Livraison</option>";
                    echo "<option value='facturation'>Facturation</option>";
                    echo "<option value='autre'>Autre</option>";
                    echo "</select>";

                    echo "<label for='city_$i'>City:</label>";
                    echo "<select name='city_$i' required>";
                    echo "<option value='Montreal'>Montreal</option>";
                    echo "<option value='Laval'>Laval</option>";
                    echo "<option value='Toronto'>Toronto</option>";
                    echo "<option value='Quebec'>Quebec</option>";
                    echo "</select>";

                    echo "<label for='zipcode_$i'>Zip Code:</label>";
                    echo "<input type='text' name='zipcode_$i' pattern='[0-9]{6}' required>";
                }
                echo "<button type='submit'>Suivant</button>";
                echo "</form>";
            }
            ?>
    </div>
</body>
</html>
