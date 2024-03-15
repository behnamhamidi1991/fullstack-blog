<?php 

class User {

    // Properties
    public $name;
    public $email;
    public $age;
    private $status = 'active';

    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    
    public function login() {
        echo $this->name . ' logged in <br>';
        echo "User's email is " . $this->email . "<br>";
        echo $this->name . " is " . $this->age . " years old" . "<br><br>";
    }

    // Getter
    public function getStatus () {
        echo $this->status;
    }

    // Setter
    public function setStatus($status) {
        $this->status = $status;
    }
}

$user1 = new User("John Doe", "john@gmail.com", 24);
$user1->login();

$user2 = new User("Jane Smith", "janesmith@gmail.com", 23);
$user2->login();


$user2->setStatus('deactive');
$user2->getStatus();

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
 
</body>

</html>