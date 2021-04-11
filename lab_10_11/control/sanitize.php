<?php 
    function sanitizestring($var) {
        if (get_magic_quotes_gpc()) {
            $var = stripslashes($var);
        }
        $var = htmlentities($var);
        $var = strip_tags($var);
        return $var;
    }

    // Looks for specific characters unique to SQL and prevents them from being put into submitted string
    function sanitizemysql($connection, $var) {
        $var = $connection->real_escape_string($var);
        $var = sanitizeString($var);
        return $var; //final "safe" input
    }
?>
