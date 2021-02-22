<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 6-4. Adding items to an associative array and retrieving them</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php  // A simple array containing typical officer hardware
    $paper["copier"] = "Copier & Multipurpose";
    $paper["inkjet"] = "Inkjet Printer";
    $paper["laser"] = "Laser Printer";
    $paper["photo"] = "Photographic Paper";

    // Retrieve value of of key 'laser'
    echo $paper["laser"];
?>  
</body>
</html>