<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Age Calculator

$age = 25;
$days = $age * 365;
$hours = $days * 24;
$min = $hours * 60;

echo "<h1>Welocme to the Age Calculator</h1>
  <h2>Your age: $age </h2>
  <h2> You have been alive for:</h2>
<ul> 
  <li>$days days</li>
  <li>$hours hours</li>
  <li>$min minutes</li>
<ul>";
?>
</body>
</html>