<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 3-5. Defining a two-dimensional array</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $oxo = array(array('x', ' ', 'o'),
                     array('o', 'o', 'x'),
                     array('x', 'o', ' '));

        echo $oxo[1][2];
    ?>
</body>
</html>