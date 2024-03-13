```php
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

```

```php
    private function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }


    // We can't access private function from the global scope and we get this error:

    // Fatal error: Uncaught Error: Call to private User::__construct() from global scope in G:\Programming\PHP\php-sandbox\index.php:22 Stack trace: #0 {main} thrown in G:\Programming\PHP\php-sandbox\index.php on line 22
```

```php
// Static members method
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
```
