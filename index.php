<?php 

$num1 = 5;
$num2 = "5";
$fruit = "apple";


$result = $num1 + $num2;

var_dump($result)

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style.css" />
    <title>PHP</title>
</head>

<body class="">
    <h1 class="course-title">PHP From Scratch</h1>
    <p>I am learning OOP right now and I will learn it like it is a piece of cake!</p>
    
    <p> <?= "Hello, my name is " . $fullName ?> </p>

    <br>
    <br>
    <p> <?= "Hello, my name is $fullName " ?> </p>

    <br>
    <br>
    <p> <?= 'Hello, my name is $fullname' ?> </p>
</body>

</html>