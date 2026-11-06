<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ifstatement</title>
    <?php include_once '../includes/styles.php'; ?>
</head>


<body>
    <h1>If Statements</h1>
    <a href="/">Home</a>
    <?php
    $x = 5;
    $y = 10;

    if ($x > $y) {
        echo "<div> $x is greater the than $y</div>";


    } else {
        echo "<div> $x is greater the than $y</div>";
    }

    // read a query string param calle value
    
    if (isset($_GET["value"])) {

        $z = $_GET["value"];
        if (is_numeric($z)) {
            if ($z > $y && $z < $x) {
                echo "<div>The qs param $z is greater than $x and $y </div>";
            } else {
                echo "<div>The qs param $z is not greater than $x and $y </div>";
            }

        } else {
            echo "<div>The query string value $z is not numeric</div>";
        }

    } else {
        echo "<div>The value query string param was not set</div>";
    }
    ?>

</body>

</html>