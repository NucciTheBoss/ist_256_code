<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 7-3. Checking for the validity of a date</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php  // Simple function to check if a date is valid
        $month = 9;
        $day = 31;
        $year = 2022;

        // Check if date is valid
        if (checkdate($month, $day, $year)){
            echo "Date is valid!";

        } else {
            echo "Date is invalid!";
        }

        // Browser should display "Date is invlaid" because
        // September only has 30 days.
    ?>
</body>
</html>