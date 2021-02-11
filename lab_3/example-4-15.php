<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 4-15. The four comparison operators</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $a = 2; $b = 3;

        if ($a > $b) echo "$a is greater than $b<br>";
        if ($a < $b) echo "$a is less than $b<br>";
        if ($a >= $b) echo "$a is greater than or equal to $b<br>";
        if ($a <= $b) echo "$a is less than or equal to $b<br>";
    ?>
</body>
</html>