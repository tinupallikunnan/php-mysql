<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Numeric Array
# Create and initialise an array variable.
echo"<h1>Days of the Week</h1>";
$days = array( 'Monday' , 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday' ) ;

# Display the value in all elements as a bulleted list.
foreach( $days as $value ) { 
    echo "<ul><li>$value </li></ul> " ;
 } 
?> 
</body>
</html>