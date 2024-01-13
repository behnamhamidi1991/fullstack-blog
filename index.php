<?php 
$listings = [
    [
        "id" => 1,
        "title" => "Software Engineer",
        "description" => "We are seeking a skilled software engineer to develop high-quality software solutions.",
        "salary" => 80000, 
        "location" => "San Francisco",
        "tags" => ["Software Development", "Java", "Python"]
    ], 
    [
        "id" => 2,
        "title" => "React.js Developer",
        "description" => "We are looking for a skilled React Developer to develop our web applications.",
        "salary" => 72000, 
        "location" => "New York City",
        "tags" => ["App Development", "JavaScript", "React.js"]
    ], 
    [
        "id" => 3,
        "title" => "PHP & Laravel",
        "description" => "We are seeking a backend developer skilled in PHP and Laravel + MySQL.",
        "salary" => 92000, 
        "location" => "Chicago",
        "tags" => ["Web Development", "PHP", "Laravel", "MySQL"]
    ], 
    [
        "id" => 4,
        "title" => "Software Engineer",
        "description" => "We are seeking a skilled software engineer to develop high-quality software solutions.",
        "salary" => 80000, 
        "location" => "San Francisco",
        "tags" => ["Software Development", "Java", "Python"]
    ], 
];


function formatSaslary($salary) {
    return '$' . number_format($salary, 2);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Job Listing</title>
  
</head>

<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Job Listing</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <?php foreach ($listings as $index => $job) ?>
        <div class="rounded-lg shadow-md <?= $index % 2 === 0 ? 'bg-blue-100' : 'bg-white' ?>">
        <div class="p-4">
            <h2><?= $job['title'] ?></h2>
            <p className="text-xl text-blue-500"><?= $job['description'] ?></p>
            <p className="text-xl text-blue-500"> <strong>Salary</strong> <?= $job['salary'] ?></p>
            <p className="text-xl text-blue-500"> <strong>Location</strong> <?= $job['location'] ?></p>


        </div>
        </div>
    </div>
</body>
</html>