<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php # CONNECT TO MySQL DATABASE.

    # Connect/Link  on 'localhost' .
    $link = mysqli_connect('localhost','root','','codespace'); 
    if (!$link) { 
    # Otherwise fail gracefully and explain the error. 
        die('Could not connect to MySQL: ' . mysqli_error()); 
    } 
    echo 'Connected to the database successfully!';  
    ?> 
</body>
</html>