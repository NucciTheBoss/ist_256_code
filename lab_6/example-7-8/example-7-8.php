<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 7-8. Alternate syntax for copying a file</title>
    <link href="..\\favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        // Copy testfile.txt
        if (!copy("testfile.txt", "testfile2.txt")){
            echo "Could not copy file";

        } else {
            echo "File successfully copied to 'testfile2.txt'";
        }
    ?>
</body>
</html>