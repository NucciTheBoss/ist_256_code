<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 5-3. Returning multiple values in an array</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        function fix_names($n1, $n2, $n3)
        {
            $n1 = ucfirst(strtolower($n1));
            $n2 = ucfirst(strtolower($n2));
            $n3 = ucfirst(strtolower($n3));

            return array($n1, $n2, $n3);
        }

        $names = fix_names("JASON", "CaRmInE", "nucciarone");
        echo $names[0] . " " . $names[1] . " " . $names[2];
    ?>
</body>
</html>