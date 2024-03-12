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
