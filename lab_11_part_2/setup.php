<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab setup</title>
</head>
<body>
    <?php // setup.php
        require_once 'login.php';
        $connection = new mysqli($hostname, $username, $password, $database);

        if ($connection->connect_error) die("Fatal Error");

        $query = "CREATE TABLE IF NOT EXISTS credentials (
            forename VARCHAR(32) NOT NULL,
            surname  VARCHAR(32) NOT NULL,
            username VARCHAR(32) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL
        )";

        $result = $connection->query($query);
        if (!$result) die("Fatal Error");

        $forename = 'Jason';
        $surname  = 'Nucciarone';
        $username = 'jason-n';
        $password = 'mysecret';
        $hash     = password_hash($password, PASSWORD_DEFAULT);

        add_user($connection, $forename, $surname, $username, $hash);

        $forename = 'Nadya';
        $surname  = 'Sudarma';
        $username = 'nadya-s';
        $password = 'acrobat';
        $hash     = password_hash($password, PASSWORD_DEFAULT);

        add_user($connection, $forename, $surname, $username, $hash);

        function add_user($connection, $fn, $sn, $un, $pw)
        {
            $stmt = $connection->prepare('INSERT INTO credentials VALUES(?,?,?,?)');
            $stmt->bind_param('ssss', $fn, $sn, $un, $pw);
            $stmt->execute();
            $stmt->close();
        }
    ?>
</body>
</html>
