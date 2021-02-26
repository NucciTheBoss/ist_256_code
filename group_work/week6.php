<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Work - Week 6</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>
<body>

<?php
    Class arrayModifier
    {
        protected $base_array; 

        function __construct() {
            $this->base_array = array();
        }

        function add_to_array($key, $value){
            $this->base_array[$key] = $value;
        }

        function get_array_item($key){
            return $this->base_array[$key];
        }
    }

    $our_array = new arrayModifier();

    $our_array->add_to_array("apple", "3");
    $our_array->add_to_array("kiwi", "1");
    $our_array->add_to_array("banana", "10");
    print_r($our_array);
    echo "<br>";    
    
    $tmp1 = $our_array->get_array_item("apple");
    $tmp2 = $our_array->get_array_item("kiwi");
    $tmp3 = $our_array->get_array_item("banana");

    echo "We have " . $tmp1 . " apples in our pantry<br>";
    echo "We have " . $tmp2 . " kiwi in our pantry<br>";
    echo "We have " . $tmp3 . " bananas in our pantry<br>";
?>  

</body>
</html>