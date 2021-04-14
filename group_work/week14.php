<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Work - Week Something</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>
    <?php
        $username = 'admin';
        $password = 'letmein';
      
        if (isset($_SERVER['PHP_AUTH_USER']) &&
            isset($_SERVER['PHP_AUTH_PW']))
        {
            if ($_SERVER['PHP_AUTH_USER'] === $username &&
                $_SERVER['PHP_AUTH_PW'] === $password)
                    echo "You are now logged in";
            else {
                die("Invalid username/password combination");
            }
        }
        else
        {
            header('WWW-Authenticate: Basic realm="Restricted Area"');
            header('HTTP/1.0 401 Unauthorized');
            die ("Please enter your username and password");
        }
    ?>
</body>
</html>