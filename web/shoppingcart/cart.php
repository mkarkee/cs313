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
            <td>
                foreach($_SESSION as $product) {
                    echo $product[0];
                    echo "</td>";
                    echo "<td>";
                    echo $product[1];
                }
            </td>

            ?>
        </tr>
    </table>
</body>
</html>