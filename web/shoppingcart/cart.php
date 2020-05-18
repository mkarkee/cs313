<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <?php 
                foreach($_SESSION as $product) {
                    echo "<td>";
                    echo $product[0];
                    echo "</td>";
                    echo "<td>";
                    echo $product[1];
                    echo "</td>";
                }
            ?>
        </tr>
    </table>
</body>
</html>