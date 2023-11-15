<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_addresses = isset($_POST["num_addresses"]) ? intval($_POST["num_addresses"]) : 0;
    if ($num_addresses > 0) {

        header("Location: address_form.php?num_addresses=$num_addresses");
        exit();
    }
}
?>
