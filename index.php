<?php 

abstract class Shape {
    protected $name;

    // Abstract method
    abstract public function calculateArea();


    public function __construct($name) {
        $this->name = $name;
    }



    // Concrete method
    public function getName() {
        return $this->name;
    }

}


class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $height, $width) {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$circle = new Circle('Circle', 5);
$rectangle = new Rectangle('Rectangle', 4, 6);

echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';



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