<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 7-5. Reading a file with fgets</title>
    <link href="..\\favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        // Open testfile.txt
        $fin = fopen("testfile.txt", "r") or 
            die("The file does not exist or you lack the permission to open the file");

        // Use fgets to get the first line of testfile.txt and then close testfile.tx
        $line = fgets($fin);
        fclose($fin);
        echo $line;
    ?>
</body>
</html>
