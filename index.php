<?php 

class User {

    // Properties
    public $name;
    public $email;
    protected $status = 'active';

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }
    
    public function login() {
        echo $this->name . ' logged in <br>';
        echo "User's email is " . $this->email . "<br>";
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


class Admin extends User {
    public $level;

    public function __construct($name, $email, $level) {
        $this->level = $level;
        parent::__construct($name, $email);
    }

}

$admin1 = new Admin('Tom Smith', 'tom@gmail.com', 5);

var_dump($admin1)

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