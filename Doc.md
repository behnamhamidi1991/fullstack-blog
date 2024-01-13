`php -S localhost:8000`

### Episode 01

- Change the title, h1, h2, p tags with php code using both ways:

```php
<?php echo "Learn PHP From Scratch"; ?>
<?= "Learn PHP From Scratch" ?>
```

Things I learned from this video:

- We can't put a comma and write two values with "print". But it can be done with "echo".
- When there is no HTML code in the file we can omit the closing php tag:

```php
<?php
echo 'Hello From PHP';
echo '<br />';
print "Hello From Print";
echo '<br />';
echo 'Value One', " Value Two";

```

- Whit HTML codes we need to close it so we can write our php code withing those tags:

````php
<?php
echo 'Hello From PHP';
echo '<br />';
print "Hello From Print";
echo '<br />';
echo 'Value One', " Value Two";

?>
```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo "Learn PHP From Scratch"; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= "Learn PHP From Scratch" ?></h1>
        </div>
    </header>
</body>

</html>
````

### Episode 02

Variables in PHP

- Variables start with "$".
- They must start with a "letter" or an "underscore".
- They `can not` start with a "number".
- They can only contain letters, numbers and underscores.
- Are case sensitive => `$Name and $name are not the same`.

Variables with multiple names:

- (Underscore) $server_name `common formatting`
- (Camel Case) $serverName `Exactly what we usually do in Javascript`
- (Pascal Case) $ServerName
- (Lowercase) $servername

#### Define variables and change html tags

```php
<?php
    $title = "Learn PHP From Scratch";
    $welcomeText = "Welcome To The Course";
    $description = "In this course, you will learn the fundamentals of the PHP language";
?>
```

```html
<title><?= $title ?></title>
```

### Episode 03

`PHP is a loosely typed language, that means when we define a variable, we have to define a type`

- String: Sequence of characters. Enclosed in quotes.
- Integer: Whole number. It can be positive or negative.
- Float: Number with a decimal point.
- Boolean: True or False.
- Array: Holds multipe values.
- Object: Collection of properties & methods.
- Null: Represents a variable with no value.

`Note: There is a special datatype called "resource" which represents an external resource. That could be many things for example a file.`

#### What is "var_dump()"

Take a look at the example below

```php
$name = "Brad Traversy";
var_dump($name);
```

`Output: string(13) "Brad Traversy"`
It shouws the value, the type and the length. We can use it later to debug the code and so on.

This function gets the type of the variable:

```php
$name2 = 'John Doe';
echo getType($name2);
```

`Output: string`

##### An example of different types in PHP

```php
<?php

// String
$name = "Brad Traversy";
$name2 = 'John Doe';
echo getType($name2);
echo "<br />";


// Integer
$age = 35;
var_dump($age);
echo "<br />";


// Float
$rating = 4.5;
var_dump($rating);
echo "<br />";


// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo "<br />";
echo "<br />";


// Array
$friends = ["John", "Jack", "Brad"];
var_dump($friends);
echo "<br />";
echo "<br />";


// Object
$person = new stdClass();
var_dump($person);
echo "<br />";
echo "<br />";


// Null
$car = null;
var_dump($car);
echo "<br />";
echo "<br />";


// Resource
$file = fopen("sample.txt", "r");
var_dump($file);
```

### Episode 04

##### The difference between "single quotes" and "double quotes"

`Concatenation in PHP`
In Javascript we use "+" sign to concatenate variables:

```javascript
let a = "Hello ";
let b = "World!";

console.log(a + b);
```

But in PHP we use "." to concatenate variables:

```php
        $fullName = $firstName . " " . $lastName;

         <?= "Hello, my name is " . $fullName . "<br />" ?>

         <?= "Hello, my name is " . $fullName . "<br />" ?>

```

##### Now what is the difference between single and double quotes?

Take a look at line "A" and "B":

A: With Double Quotes

```php
$fullName = "John Doe";

<?= "Hello, my name is $fullName" ?>
```

`Output: Hello, my name is John Doe`

BUT NOW: With Single Quotes

B:

```php
$fullName = "John Doe";

<?= "Hello, my name is $fullName" ?>
```

`Output: Hello, my name is $fullName`

#### So single quoates don't parse the variable!

Escaping single and double quotes:

```php
    <?= "Hello, my name is \"John\"" ?>
    <?= 'Hello, my name is \'John\'' ?>
    <?= 'Hello, my name is "John"' ?>
```

### Episode 05

```php

<?php
    $output = null;

    $num1 = 20;
    $num2= 10;

    $output = "$num1 + $num2 =" . $num1 + $num2;
    $output = "$num1 - $num2 =" . $num1 - $num2;
    $output = "$num1 * $num2 =" . $num1 * $num2;
    $output = "$num1 / $num2 =" . $num1 / $num2;
    $output = "$num1 % $num2 =" . $num1 % $num2;

    // Assignment Operator
    $num3 = 10;
    $num3 = $num3 + 20;

    $output = rand();
    $output = getrandmax();
    $output = rand(1, 10);

    // Round
    $output = round(4.2); // Depends on the decimal number which way it's rounded.
    $output = ceil(4.2); // Rounds down anyway
    $output = floor(4.8); // Rounds up anyway

    //sqrt()
    $output = sqrt(64);

    // pi
    $output = pi();

    // abs()
    $output = abs(-4.7);

    // max()
    $output = max(1, 2, 3, 4, 5);
    $output = max([1, 25, 3, 4]);

    // min()
    $output = min(1, 2, 5, 10, 3);


    $output = number_format(1234567.191234, 2, ".", ",");

?>
```

### Episode 06: Functions | String

```php

    $output = null;
    $string = "Hello World!";

    // strlen
    $output = strlen ($string);

    // strpos
    $output = strpos($string, "World");

    // Get specific char by index
    $output = $string[4];

    // substr
    $output = substr($string, 6, 5);

    // str_replace
    $output = str_replace('World', 'Universe', $string);

    // strtolower
    $output = strtolower($string);

    // strtoupper
    $output = strtoupper($string);

    $output = trim("Hello World!   ");

```

```php
// Get Year
    $output = date('Y');


// Get year with timestamp
    $output = date('Y', 936345600);


// Get timestamp from strtotime
    $output = date("Y", strtotime("1999-09-15"));


// Get Month
    $output = date('m');

// Get day
    $output = date("D");
    $output = date("l");

// Get month, day and year
    $output = date("Y - m - d");

// Get hour
    $output = date('h');

// Get second
    $output = date('s');

// Get am/pm
    $output = date('Y-m-d h:i:s a');
```

`15 - Dates Times => DONE`

### Episode 07: Arrays

```php
$names = array("John", "Jack", "Jill");
$names_2 = ["John", "Jack", "Jill"];
```

Both of the lines above are valid as arrays

```php

$names = array("John", "Jack", "Jill");
$numbers = [1,2,3,4,5,6];

function inspect($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

// inspect($names);
// inspect($numbers);

// print_r($names)

echo $names[2];
echo "\n";
echo$numbers[3]

```

```php
// Add element to array
$numbers[6] = 100;
inspect($numbers)

// Change a specific index
$numbers[3] = 200;
inspect($numbers)

// Remove a specific index
unset($numbers[3]);
inspect($numbers)

```

```php
die();
```

`This simple function does an amazing thing. So after this function nothing is going to be read or showed in the browser`

```php
// count - It counts and shows the indexes of an array
$output = count($ids);

// sort - It sortes the numbers, strings, etc.
`e.g.`
$ids = [10, 22, 15, 45, 67, 34];
sort ($ids);
`output: 10, 15, 22, 34, 45, 67`

$users = ["user2", "user1", "user3"];
sort ($users);
`output: user1, user2, user3`


// This sorts but reverse the array
$ids = [10, 22, 15, 45, 67, 34];
rsort($ids)
`output: 67, 45, 34, 22, 15, 10`

// array push - first name of the array, then the value we want to add
array_push($ids, 100)

// array_pop - removes the last item
array_pop($ids);

// array_shift => removes the last item
array_shift($ids);
array_shift($users);

// array_unshift - Puts the second argument which is the value at the beginning of the array.
array_unshift($ids, 100);
array_unshift($users, "user3")


// array_splice
array_splice($ids, 1, 1, "New ID");
array_splice($users, 0, 1, "New User");

// array_sum
$output = "Sum of IDs: " . array_sum($ids);


// array_search
$output = "User 2 is at index: " . array_search("user2", $users);

// in_array
$output = "User 3 exists: " . in_array("user4", $users);


// explode - Converts a string to an array. The first argument "," means that you must separte strings from each comma, the second argument is the array it self.
$tags = 'tech,code,programming';
$tagsArr = explode(",", $tags);
var_dump($tagsArr)

// implode - This converts an array to a string
$output = implode(",", $users);
```

###### Associative Arrays

```php
$output = null;

$user = [
    "name" => "John",
    "email" => "john@gmail.com",
    "password" => "123456",
    "hobbies" => ["Tennis", "Video Games"]
];

$output = $user["name"];
$output = $user["email"];

$output = $user["hobbies"][0];

$user["address"] = "123 Main St.";

unset($user["address"]);

```

```php
$output = null;

$fruits = [
    ["Apple", "Red"],
    ["Orange", "Orange"],
    ["Banana", "Yellow"],
];


$output = $fruits[0][1];

$fruits [] = ["Grape", "Purple"];

$users = [
    ["name" => "John", "email" => "john@gmail.com", "password" => "123456"],
    ["name" => "Marry", "email" => "marry@gmail.com", "password" => "m123456"],
    ["name" => "Tim", "email" => "tim@gmail.com", "password" => "t123456"],
];

$output = $users[1]["email"];

$users[] = ["name" => "Mike", "email" => "mike@gmail.com", "password" => "t123456"];

array_push($users, ["name" => "Larry", "email" => "larry@gmail.com", "password" => "123456"]);

unset($users[0]);


$output = count($users);
```

### Episode 08: Loops

```php
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br />";
}

// Loops are pretty much like Javascript


// Sample of a nested loop
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo $i . " - " . $j . "<br />";
    }

    // Same thing with "while"
    $i = 0;

while ($i < 5) {
    $j = 0;

    while ($j < 5) {
        echo $i . " - " . $j . "<br />";
        $j++;
    };

    $i++;
}

};
```

### Conditional Statements

```php
   $score = 50;
    if ($score > 40) {
        echo 'High Score';
    } else {
        echo 'Low Score';
    }
```

```php
for ($i = 1; $i < 100; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    } elseif ($i % 3 === 0) {
        echo 'Fizz';
    }
    elseif($i % 5 === 0) {
        echo 'Buzz';
    }
    else {
        echo $i;
    }

    echo "<br>";
}

```

```php
switch ($dayOfWeek) {
    case "Monday":
        $message = "Monday Blues!";
        $color = "blue";
        break;
    case "Tuesday":
        $message = "At least it's not Monday!";
        $color = "green";
        break;
    case "Wednesday":
        $message = "Hump Day!";
        $color = "orange";
        break;
    case "Thursday":
        $message = "One more day until Friday!";
        $color = "red";
        break;
    case "Friday":
        $message = "TGIF!";
        $color = "purple";
        break;
    case "Saturday":
        $message = "Have a nice weekend!";
        $color = "yellow";
        break;
    case "Sunday":
        $message = "Have a nice weekend!";
        $color = "steelblue";
        break;
}
```

```php
// I put this variable into my CSS code
    background-color: <?= $color ?>;
```

### Functions

```php
function sayHello() {
    echo "Hello World!";
}

function sayGoodbye() {
    return "Goodbye";
}

$goodbye = sayGoodbye();


// Functions with parameter
function add ($a, $b) {
    return $a + $b;
}

$result =  add(2, 2)

// Parameter $a, $b
// Argument 2, 2


function addAll(...$numbers) {
    $total = 0;

    foreach($numbers as $number) {
        $total += $number;
    }

    return $total;
}

$result = addAll(1, 2, 3, 4, 5)



// Global Scope
$name = "Alice";


function sayHello() {
    global $name;
     echo "Hello" . $name;
}

// In the function of sayHello I couldn't first use $name. Using "global $name" inside the function helped fix the problem.

// It can be reassigned
function sayHello() {
    global $name;
    $name = "Bobby"; // <<<<<
    echo "Hello" . $name;

}



function sayGoodbye() {
    $names = ["Jack", "Jill"];

    echo "Goodbye " . $names[0];
}

sayGoodbye();

```

### constants in PHP

```php
define("APP_NAME", "My App");
define("APP_VERSION", "1.0.0");

echo APP_NAME;
echo "<br />";
echo APP_VERSION;
// ================================

const DB_NAME = "mydb";
const DB_HOST = "localhost";

echo DB_NAME, DB_HOST;

// ================================

const DB_NAME = "mydb";
const DB_HOST = "localhost";


function run () {
    echo DB_NAME, DB_HOST;
}

run();

```

### Optional Type Declarations
