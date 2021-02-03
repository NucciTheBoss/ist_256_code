<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 3-16. An alternative solution: pass $temp as an argument</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $temp = "The date is ";
        echo longdate($temp, time());

        function longdate($text, $timestamp) {
            return $text . date("l F jS Y", $timestamp);
        }
    ?> 
</body>
</html>