<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MILAN KARKI HOMEPAGE</title>
</head>
<div id="navigationBar">
    <ul>
        <li><a href="milan.pho">Home</a></li>
        <li><a href="assignments.php">Assignments</a></li>
        <?php
            $t=time();
            echo(date("Y-m-d",$t));
        ?>
    </ul>
    
</div>

<div id="photo">
    <img src="myimage.jpg" alt="My picture">
</div>
<body>
    
</body>
</html>