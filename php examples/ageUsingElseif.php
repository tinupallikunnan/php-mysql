<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter your age: <input type="number" name="age" required><br><br>
        <input type="submit" value="Your age group">
    </form>   
    <?php
       
    if(isset($_POST['age'])) {
        $age = $_POST['age'];
        if ($age < 0) {
            echo "Invalid age";
        } elseif ($age < 13) {
            echo "You are a child";
        } elseif ($age < 20) {
            echo "You are a teenager";
        } elseif ($age < 65) {
            echo "You are an adult";
        } else {
            echo "You are a senior citizen";
        }
            
    } 
    ?>
</body>
</html>