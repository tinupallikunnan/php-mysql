<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Get the input number from the user
$num = $_POST['num'];

// Display the multiplication table of the input number
echo "Multiplication table of $num: <br>";
for ($i = 1; $i <= 10; $i++) {
  $result = $num * $i;
  echo "$num x $i = $result <br>";
}
?>
</body>
</html>