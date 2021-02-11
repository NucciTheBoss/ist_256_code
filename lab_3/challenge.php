<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <title>Lab 3 challenge</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $some_number = 42;
        $some_string = "42 is the answer to life";

        for ($iter = 1; $iter <= 10; ++$iter) 
        {
            if ($some_number !== $some_string)
            {
                echo "$some_number times $iter is " . $some_number * $iter . "<br>";
            } else {
                echo "Uh oh, $some_string <br>";
            }
        }
    ?>
</body>
</html>