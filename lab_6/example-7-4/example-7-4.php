<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 7-4. Creating a simple text file</title>
    <link href="..\\favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        // Create a new file to write to
        $fout = fopen("testfile.txt", "w") or die("Failed to create file");

        // Create that juicy here document
        $text = <<<_END
        Line 1
        Line 2
        Line 3
        _END;

        // Write out to file and then close it
        fwrite($fout, $text) or die("Could not write out to file");
        fclose($fout);
        echo "File 'testfile.txt' written successfully";
    ?>
</body>
</html>