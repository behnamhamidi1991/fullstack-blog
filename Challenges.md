`FizzBuzz`

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

`Days and Colors Challenge`

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
    font-family: "Roboto";
    background-color: <?= $color ?>;
    display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
     height: 100vh;
```
