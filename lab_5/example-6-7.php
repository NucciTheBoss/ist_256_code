<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 6-7. Walking through an associative array using foreach..as</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php
    // Instantiate array
    $paper = array("copier" => "Copier & Multipurpose",
                   "inkjet" => "Inkjet Printer",
                   "laser" => "Laser Printer",
                   "photo" => "Photographic Paper");

    // Use foreach loop to cycle over keys and values within the array
    foreach($paper as $item => $description){
        echo "$item: $description<br>";
    }
?>  
</body>
</html>