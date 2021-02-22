<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 6-10. Creating a multidimemsional associative array</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
<?php
    // Instantiate multidimensional array
    $products = array(
        
        "paper" => array(

            "copier" => "Copier & Multipurpose",
            "inkjet" => "Inkjet Printer",
            "laser" => "Laser Printer",
            "photo" => "Photographic Paper"

        ),

        "pens" => array(

            "ball" => "Ball Point",
            "hilite" => "Highlighters",
            "marker" => "Markers"

        ),

        "misc" => array(

            "tape" => "Sticky Tape",
            "glue" => "Adhesives",
            "clips" => "Paperclips"

        )

    );

    echo "<pre>";

    // Use foreach to loop through the top-level array
    foreach($products as $section => $items){
        // Loop through each sub array within top-level
        foreach($items as $key => $value){
            echo "$section:\t$key\t($value)<br>";
        }
    }

    echo "</pre>";
?>  
</body>
</html>