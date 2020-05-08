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
        
    </ul>
    
</div>

<div class="photo">
    <img src="myimage.jpg" alt="My picture" style="width:100%"> 
    <div class="container">
    <p>Harriman Trail, Idaho</p>
  </div>
</div>

<div class="card">
  <div class="header">
    <h1>1</h1>
  </div>

  <div class="container">
    <<?php
            $t=time();
            echo("<p>");
            echo(date("Y-m-d",$t));
            echo("/p>");
        ?>
  </div>
</div>

<div id="desc">
        <p>Name: Milan Karki</p>
        <p>From: Nepal</p>
        <p>Major: Computer Science</p>
</div>

<body>
    
</body>
</html>