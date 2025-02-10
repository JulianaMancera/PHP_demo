<?php 

    $output = null;
    $string = 'Hello World';

    //strlen
    $output = strlen($string);

    //str_word_count
    $output = str_word_count($string);

    //strpos
    $output = strpos($string, 'World');

    //get specific char by index
    $output = $string[0];

    //substr
    $output = substr($string, 1, 5);

    //str_replace
    $output = str_replace('World', ' Universe', $string);

    //strolower
    $output = strtolower($string);

    //stroupper
    $output = strtoupper($string);

    //ucwords
    $output = ucwords($string);

    //trim
    $output = trim(     ' Hello World   ');

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
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <p class="text-xl"><?= $output?></p>
        </div>
    </div>
</body>

</html>