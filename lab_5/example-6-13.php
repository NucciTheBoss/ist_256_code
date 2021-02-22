<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 6-13. Exploding a string delimited with *** into an array</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php
    // Explode string and print out an array
    $temp = explode("***", "A***sentence***with***asterisks");
    print_r($temp)
?>  
</body>
</html>