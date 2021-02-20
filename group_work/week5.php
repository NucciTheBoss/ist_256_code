<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Work - Week 5</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>

    <?php
        Class theCoolKids
        {
            function __construct($param1, $param2) {
                $this->name = $param1;
                $this->birthday = $param2;
            }
        }
        
        function factory($name, $birth) {
        
            $object = new theCoolKids($name, $birth);
            print_r($object);
        }
        

        // Run function yay!
        factory("Taryn", "5-JAN-2000");
    ?>

</body>
</html>