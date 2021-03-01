<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 7-16. A more secure version of upload.php</title>
    <link href="..\\favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        // Create HTML form for submitting an image
        echo <<<_END
        <html><head><title>PHP Form Upload</title></head><body>
        <form method='post' action='example-7-16.php' enctype='multipart/form-data'>
        Select a JPG, GIF, PNG or TIF File:
        <input type='file' name='filename' size='10'>
        <input type='submit' value='Upload'></form>
        _END;

        // Check that image is a valid upload format
        if ($_FILES){
            $name = $_FILES["filename"]["name"];

            // Switch-case statement to verify extension
            switch($_FILES["filename"]["type"]){
                case "image/jpeg":
                    $ext = "jpg";
                    break;

                case "image/gif":
                    $ext = "gif";
                    break;

                case "image/png":
                    $ext = "png";
                    break;

                case "image/tiff":
                    $ext = "tif";
                    break;

                default:
                    $ext = "";
                    break;
            }

            // Execute if image is in a valid format
            if ($ext){
                $n = "image.$ext";
                move_uploaded_file($_FILES["filename"]["tmp_name"], $n);
                echo "Uploaded image '$name' as $n:<br>";
                echo "<img src='$n'>";

            } else {
                echo "'$name' is not an accepted image file";
            }
        } else {
            echo "No image has been uploaded";
        }

        echo "</body></html>"
    ?>
</body>
</html>