<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function replaceVowelsWithX($str) {
            $vowels = array('a','e','i','o','u','A','E','I','O','U');
            return str_replace($vowels, 'x', $str);
        }

        $input = "Hello, World!";
        $output = replaceVowelsWithX($input);
        echo $input."<br/>";
        echo $output;
    ?>
</body>
</html>