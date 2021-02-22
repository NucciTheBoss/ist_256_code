<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 6-15. Using compact to help with debugging</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php
    // Instantiate some basic variables
    $j = 23;
    $temp = "Hello";
    $address = "1 Old Street";
    $age = 61;

    // Explode string and create associative array
    print_r(compact(explode(" ", "j temp address age")));
?>  
</body>
</html>