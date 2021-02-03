<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 3-4. Your first PHP program</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $username = "Fred Smith";
        echo $username;
        echo "<br>";
        $current_user = $username;
        echo $current_user;
    ?>
</body>
</html>