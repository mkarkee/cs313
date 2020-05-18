<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<input type="text" placeholder="First Name" name="first_name" onblur="validFirstName(this)" required>
    <span id="firstNameError"></span>
    <br>
    <input type="text" placeholder="Last Name" name="last_name" onblur="validLastName(this)" required>
    <span id="lastNameError"></span>
    <br>
    <textarea placeholder="Address" name="address" required></textarea>
    <br>
    <input type="text" placeholder="Phone Numer" name="phone_number" maxlength="12" size="12" onchange="validPhoneNumber(this)" required>
    <span id="phoneError"></span>

    <br>
    <div>
        <input type="submit" value="Purchase" name="validate" />
        <input type="reset" name="reset" value="Reset">
    </div>
 
<footer>
    <script src="script.js"></script>
</footer>
</body>
</html>