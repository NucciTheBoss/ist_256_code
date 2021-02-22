<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 6-14. Using the compact function</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php
    // Instantiate some basic variables
    $fname = "Doctor";
    $sname = "Who";
    $planet = "Gallifrey";
    $system = "Gridlock";
    $constellation = "Kasterborous";

    // Create array and print it out
    $contact = compact("fname", "sname", "planet", "system", "constellation");

    print_r($contact);
?>  
</body>
</html>