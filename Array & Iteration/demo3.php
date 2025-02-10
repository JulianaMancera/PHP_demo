<?php 
//Associative array is used to store data elements indexed by keys instead of numerical indices
    $output = null;

    $user = 
        ['name' => 'John',
        'email' => 'luffy@gmail.com',
        'password' => '1234',
        'hobbies' => ['Tennis', 'Video Games']
        ];

//Accessing elements
    $output = $user['name'];
    $output = $user['email'];

//Accessing nested elements
    $output = $user['hobbies'][0];

//Adding a new element
    $user['address'] = '123 Main Street';

//removing element
unset($user['address']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
<header class="bg-gradient-to-r from-purple-500 to-violet-700 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP Associative Array</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <p class="text-xl"><?=$output?></p>
            <h2 class="text-2xl font-semibold my-4">User Array:</h2>
            <pre><?php print_r($user); ?></pre>
        </div>
    </div>
</body>

</html>