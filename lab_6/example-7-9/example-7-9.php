<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 7-9. Moving a file</title>
    <link href="..\\favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        // Basically same thing as renaming a file, but Linux style
        if (!rename("testfile2.txt", "testfile2.new")){
            echo "Could not rename file";

        } else {
            echo "File successfully renamed to 'testfile2.new'";
        }
    ?>
</body>
</html>