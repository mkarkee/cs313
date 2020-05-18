<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkoutStyle.css">
    <title>Document</title>
</head>
<body>
    <table id="content">
            <?php 
                foreach($_SESSION as $product) {
                    echo "<tr><td>";
                    echo $product[0];
                    echo "</td>";
                    echo "<td>";
                    echo $product[1];
                    echo "</td></tr>";
                }
            ?>
    </table>
    <div id="buttons">
    <a href="browse.php" id="button1">Continue Shopping  </a>
    <a href="checkout.php" id="button1">Checkout</a>
            </div>
</body>
</html>