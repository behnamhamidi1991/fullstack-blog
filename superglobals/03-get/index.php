<?php


// echo isset($_GET['name']) ? $_GET['name'] : "Nothing";
// echo $_GET['name'] ?? '';

echo htmlspecialchars($_GET['name'] ?? '');

// var_dump($_GET);


?>