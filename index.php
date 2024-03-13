<?php 

class MathUtility {
    public static $pi = 3.14;

    public static function add(...$nums) {
        return array_sum($nums);
    }

}

echo MathUtility::$pi;
echo MathUtility::add(1,2,3,4,5);

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
    <p>I will be the best computer engineer and developer the world has ever seen!</p>
    <p>Just wait and watch!</p>
</body>

</html>