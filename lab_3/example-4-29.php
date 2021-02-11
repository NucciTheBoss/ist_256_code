<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 4-29. A while loop to print the 12 times table</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $count = 1;

        while ($count <= 12)
        {
            echo "$count times 12 is " . $count * 12 . "<br>";
            ++$count;
        }
    ?>
</body>
</html>