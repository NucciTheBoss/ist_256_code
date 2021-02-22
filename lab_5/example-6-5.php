<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 6-5. Adding items to an array using the array keyword</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php
    // Declare an array which uses integers as keys
    $p1 = array("Copier", "Inkjet", "Laser", "Photo");

    echo "p1 element: " . $p1[2] . "<br>";

    // Declare array that uses strings as keys
    $p2 = array("copier" => "Copier & Multipurpose",
                "inkjet" => "Inkjet Printer",
                "laser" => "Laser Printer",
                "photo" => "Photographic Paper");

    // Use string key to echo value in array
    echo "p2 element: " . $p2["inkjet"] . "<br>";
?>  
</body>
</html>