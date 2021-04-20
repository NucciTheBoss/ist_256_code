<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 1 - Lab 11.5</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <?php require_once "login.php"?>
</head>
<body>
    <?php
        $conn = new mysqli($hostname, $username, $password, $database);

        if ($conn->connect_error) die("Fatal Error");

        if (isset($_SERVER['PHP_AUTH_USER']) &&
            isset($_SERVER['PHP_AUTH_PW']))
        {
            $un_temp = mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_USER']);
            $pw_temp = mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_PW']);
            $query   = "SELECT * FROM credentials WHERE username='$un_temp'";
            $result  = $conn->query($query);

            if(!$result) {
                die("User not found");
            }
            elseif ($result->num_rows)
            {
                $row = $result->fetch_array(MYSQLI_NUM);

                $result->close();

                if (password_verify($pw_temp, $row[3])) echo
                htmlspecialchars("$row[0] $row[1] : 
                Hi $row[0], you are now logged in as '$row[2]'");
                else die("Invalid username/password combination");
            }
            else die("Invalid username/password combination");
        }
        else
        {
            header('WWW-Authenticate: Basic realm="Restricted Area"');
            header('HTTP/1.0 401 Unauthorized');
            die ("Please enter your username and password");
        }

        $conn->close();

        function mysql_entities_fix_string($conn, $string)
        {
            return htmlentities(mysql_fix_string($conn, $string));
        }

        function mysql_fix_string($conn, $string)
        {
            if (get_magic_quotes_gpc()) $string = stripslashes($string);
            return $conn->real_escape_string($string);
        }
    ?>
</body>
</html>