<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 4 Challenge</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <?php
        function tri_add($number1, $number2, $number3){
            $result = $number1 + $number2 + $number3;
            echo "<div class='w3-container w3-red w3-cell w3-cell-middle'><p class='w3-sans-serif'>The sum of my three favorite numbers is $result</p></div>";
        }

        // Declare some numbers and then call function to action
        $n1 = 42;
        $n2 = 101;
        $n3 = 8;

        tri_add($n1, $n2, $n3);
    ?>
</body>
</html>