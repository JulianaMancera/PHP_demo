<?php
    $output = null;
    $users = null;


    $fruits = [
           //0    //1
        ['Apple', 'Red'],  //0
        ['Orange', 'Orange'],  //1
        ['Banana', 'Yellow']  //2
    ];

    $output = $fruits[2][1];

//Multidimensional Associative Array

    $users = [ 
        ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 'secret'],
        ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 'secret'],
        ['name' => 'Cruz', 'email' => 'cruz@gmail.com', 'password' => 'secret']
        
    ];


//Access email for the first user
    //$output = $users[0]['email'];
    $output = $users[2]['name']. ' '. $users[2]['email']. ' '.$users[2]['password'];

//Add a new user
$users[] =  ['name' => 'Alex', 'email' => 'alexz@gmail.com', 'password' => 'secret'];

//Remove the last user
array_pop($users);

//Remove the first user
array_shift($users);

//count users/elements
$output = count($users) . ' users in the array';


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
            <h1 class="text-3xl font-semibold">PHP Multi Dimensional Array</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
        <h2 class="text-2xl font-semibold my-4">Output:</h2>
            <p class="text-xl"><?=$output?></p>
            <h2 class="text-2xl font-semibold my-4">User Array:</h2>
            <pre><?php print_r($users); ?></pre>
        </div>
    </div>
</body>

</html>