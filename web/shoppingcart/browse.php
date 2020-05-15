<?php

    session_start();
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['qty'];

    $product = array($name,$price, $quantity);
    $_SESSION[$name] = $product;
    print_r($product);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>The Watch Shop</title>
</head>
<body>
    <header>
        <h1>The Watch Shop</h1>
    </header>
    
    
    <br>
    

    <table id="productCost">
        <form action="browse.php" method="post">
            <tr>
                
                <td><img class="watch" src="images/1.jpg" alt="watch one"></td>
                <td id="watchOne">199.99</td>
                <td><input type="text" name="qty"></td>
                <input type="hidden" name="name" value="Watch one">
                <input type="hidden" name="price" value="199.99">
                <td><input type="submit" name="addCart" value="Add to Cart"></td>
                
            </tr>
        </form>
        <tr>
            <td><input type="button" class="add" name="item[]" value="Add to Cart" onclick="totalCost();"></td>
            <td><img class="watch" src="images/2.jpg" alt="watch two"></td>   
            <td id="watchTwo">299.99</td>        
        </tr>
        <tr>
            <td><input type="button" class="add" name="item[]" value="Add to Cart" onclick="totalCost();"></td>
            <td><img class="watch" src="images/3.jpg" alt="watch three"></td>
            <td id="watchThree">99.99</td>           
        </tr>
        <tr>
            <td><input type="button" class="add" name="item[]" value="Add to Cart" onclick="totalCost();"></td>
            <td><img class="watch" src="images/4.webp" alt="watch four"></td>
            <td id="watchFour">249.99</td>            
        </tr>
        <tr>
            <td colspan="1"></td>
            <td>Total:</td>
            <td><input type="text" id="total" readonly="readonly" name="costTotal" value="$0.00"></td>
        </tr>
    </table>
    <br>
    
    <div>
        <a href="cart.php">Go to Cart</a>
    </div>
</form>

</body>
</html>
