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

```php

// Article Challenge
class Article {
    public $title;
    public $content;
    private $published = false;


    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function publish() {
        $this-> published = true;
    }

    public function isPublished () {
        return $this->published;
    }
}


$article1 = new Article("My first post", "Lorem ipsum dolor sit amet . The graphic and typographic operators know this well, in reality all the professions dealing with the universe of communication have a stable relationship with these words, but what is it? Lorem ipsum is a dummy text without any sense. Lorem ipsum dolor sit amet . The graphic and typographic operators know this well, in reality all the professions dealing with the universe of communication have a stable relationship with these words, but what is it? Lorem ipsum is a dummy text without any sense.");


var_dump($article1);

```

```php
// Abstract classes
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
```
