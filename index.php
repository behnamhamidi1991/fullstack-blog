<?php 

class User {
    // Properties
    public $name;
    public $email;

    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }


    // Methods
    public function login() {
        echo "The user is logged in";
    }
}

// Instantiate a new object
    $user1 = new USer ("John Doe", "johndoe@gmail.com");
    $user1->login();

    $user2 = new User("Jane Smith", "janes@gmail.com");
    $user2->login();

    var_dump($user1)
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