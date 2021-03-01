<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge - Lab 6</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <!-- Add a fancy header -->
    <div class='w3-container'>
        <h1 class='w3-center w3-animate-top'>Welcome to the coin toss!</h1>
    </div>

    <?php  // Flip a coin until the result is "tails"
    $coin = "";

    echo "<div class='w3-container w3-center'>";
    do {
        // Call rand() to handle the coin toss
        // 0 -> Heads : 1 -> Tails
        $heads_or_tails = rand(0, 1);

        // Switch case to determine if coin is heads or tails
        switch($heads_or_tails){
            case 0:
                $coin = "heads";
                echo "<p><span class='w3-red w3-padding w3-animate-left'>The coin landed on heads</span></p><br>";
                break;

            case 1:
                $coin = "tails";
                echo "<p><span class='w3-green w3-padding w3-animate-right'>The coin landed on tails!</span></p><br>";
                break;

            default:
                $coin = "";
                break;       
        }
    } while ($coin != "tails");

    echo "</div>"
    ?>
</body>
</html>