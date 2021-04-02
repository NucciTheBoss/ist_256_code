<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 1 - Lab 10 and 11 Execution</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">

    <!-- Import Bootstrap framework for CSS styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Students</h1>

<?php 
    

    echo <<<_END

    <form action='index.php' method='post'><pre>
    // insert the other columns (name, id, college, etc.)

    Year <select name="year">
        <option value="F">Freshman</option>
        <option value="Soph">Sophomore</option>
        <option value="J">Junior</option>
        <option value="Sr">Senior</option>
        
    </select>

    Player Notes: <textarea name="notes" cols="50" rows="5"></textarea>
    // what happens when the button is pressed: adds the info as a record
    <input class="whatever-name-we-want" type="image" name="submit" value="ADD RECORD" src="pirate.jpg">
    </pre></form>
_END;

?>
    
</body>
</html>