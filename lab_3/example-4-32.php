<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 4-32. Expanding Example 4-31 to use curly braces</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $count = 1;

        do {
            echo "$count times 12 is " . $count * 12;
            echo "<br>";
        } while (++$count <= 12);
    ?>
</body>
</html>