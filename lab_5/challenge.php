<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <title>The Challenge - Lab 5</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php
    // Create the seven variables
    $p = "Parenthesis";    
    $e = "Exponents";
    $m = "Multiplication";
    $d = "Division";
    $a = "Addition";
    $s = "Subtraction";
    $r = "Reduce";
    
    // Create PEMDAS array using compact function
    $pemdas = compact("p", "e", "m", "d", "a", "s", "r");

    echo "<pre>";
    // Loop through PEMDAS and print output to screen
    foreach($pemdas as $key => $value){
        echo "$key: $value<br>";
    }

    echo "</pre>";
?>  
</body>
</html>