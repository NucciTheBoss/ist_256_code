<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 4-16. The logical operators in use</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $a = 1; $b = 0;

        echo ($a AND $b) . "<br>";
        echo ($a OR $b) . "<br>";
        echo ($a XOR $b) . "<br>";
        echo !$a . "<br>";
    ?>
</body>
</html>