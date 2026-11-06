<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include_once '../includes/styles.php'; ?>
</head>

<body>
    <h1>
        <h1>Functions</h1>
        <a href="/">Home</a>

        <?php
        function add(int|float $x, int|float $y): int|float
        {
            return $x + $y;
        }
        function subtract(int|float $x, int|float $y): int|float
        {
            return $x - $y;
        }
        function multiply(int|float $x, int|float $y): int|float
        {
            return $x * $y;
        }
        function divide(int|float $x, int|float $y): int|float
        {
            return $x / $y;
        }
        function modulus(int|float $x, int|float $y): int|float
        {
            return $x % $y;
        }


        ?>
        <div> 3+4 = <?= add(3, 4) ?></div>
        <div> 10 - 5 = <?= subtract(10, 5) ?></div>
        <div> 10 * 5 = <?= multiply(10, 5) ?></div>
        <div> 10 / 5 = <?= divide(10, 5) ?></div>
        <div> 10 % 5 = <?= modulus(10, 5) ?></div>



</body>

</html>