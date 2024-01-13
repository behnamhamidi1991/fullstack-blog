<?php 

declare(strict_types = 1);

function getSum(int $a , int $b): int {
    return $a + $b;
}

$result = getSum(1, 1);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Arithmatic Operations</title>
  
</head>

<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
           <p className="text-xl">
               <?= $result ?>
           </p>
          
        </div>
    </div>
</body>

</html> 