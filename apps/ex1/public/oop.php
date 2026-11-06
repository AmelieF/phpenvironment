<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <?php include_once '../includes/styles.php' ?>
    <?php include_once '../includes/student.php' ?>
</head>
<h1 class="blue">OOP and Classes</h1>
<a href="/">Home</a>
<div>
    <?php
    $student1 = new Student("Dave", "Burchill");
    $student2 = new Student("Murilo", "Mendes");
    $student3 = new Student("Gilles", "Robichaud");
    $student4 = new Student("Linda", "Moore");

    echo $student1->firstName;
    echo "<br>";
    echo $student2->firstName = "Murilo";
    echo "<br>";
    echo $student1->getFullName();

    $students = [$student1, $student2, $student3];
    array_push($students, $student4);

    ?>

    <ol>
        <?php
        for ($i = 0; $i < count($students); $i++) {
            echo "<li>" . $students[$i]->getFullName() . "</li>";
        }
        ?>

    </ol>
    <ul>
        <?php
        foreach ($students as $student) {
            echo "<li>" . $student->getFullName() . "</li>";
        }

        ?>
    </ul>
</div>

<body>

</body>

</html>