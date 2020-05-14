<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
div id="cards">
        <input type="radio" name="card" value ="Visa" required><label>Visa</label><br>
        <input type="radio" name="card" value="Mastercard"><label>Mastercard</label><br>
        <input type="radio" name="card" value="American Express"><label>American Express</label>
    </div>
    <br>
    <input type="text" name="credit_card" placeholder="Credit Card #" maxlength="20" size="20" onblur= "isCreditValid(this)" required>
    <span id="CreditError"></span>
    <br>
    <input type="text" name="exp_date" placeholder="Expiration Date" onblur="isExpValid(this)" required>
    <span id="expError"></span>
    
    <br>
    <div>
        <input type="submit" value="Purchase" name="validate" />
        <input type="reset" name="reset" value="Reset">
    </div>
</body>
</html>