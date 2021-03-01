<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 7-6. Reading a file with fread</title>
    <link href="..\\favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        // Open testfile.txt
        $fin = fopen("testfile.txt", "r") or 
            die("The file does not exist or you lack the permission to open the file");

        // Use fread to get first three characters in the file
        $text = fread($fin, 3);
        fclose($fin);
        echo $text;
    ?>
</body>
</html>
