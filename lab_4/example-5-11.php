<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 5-11. Creating and interacting with an object</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        class User
        {
            public $name, $password;

            function save_user()
            {
                echo "Save User code goes here";
            }
        }
        
        $object = new User;
        print_r($object);
        echo "<br>";

        $object->name = "Jason";
        $object->password = "password";
        print_r($object);
        echo "<br>";

        $object->save_user();
    ?>
</body>
</html>