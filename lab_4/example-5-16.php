<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jason C. Nucciarone">
    <meta name="copyright-holder" content="Oreilly Media">
    <title>Example 5-16. Use the variable $this in a method</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        class User
        {
            public $name, $password;

            function get_password()
            {
                return $this->password;
            }
        }

        $object = new User;
        $object->password = "Who needs encryption anyways?";

        echo $object->get_password();
    ?>
</body>
</html>