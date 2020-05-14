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
    <form onsubmit="return validAll();" action="checkout.php" method="POST">
    
    <br>
    <table id="productCost">
        <tr>
            <th>Add To Cart</th>
            <th>Item</th>
            <th>Price(USD$)</th>
        </tr>
        <tr>
            <td><input type="button" class ="add" name="item[]" value="Add to Cart" onclick="totalCost();"></td>
            <td><img class="watch" src="images/1.jpg" alt="watch one"></td>
            <td id="watchOne">199.99</td>
        </tr>
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
        <input type="submit" value="Show Cart" name="validate" />
    </div>
</form>

</body>
</html>
