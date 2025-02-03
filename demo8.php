<?php

    $output = null;

    //get year
    $output = date('Y');

    //use a different date with a timestamp
    $output = date('Y', 936345600);

    //year for a different date
    $output = date('Y', strtotime('1999-09-01'));

    //get month
    $output = date('m');

    //get day
    $output = date('d');

    //get day of the week
    $output = date('D');
    $output = date('l');

    //get hour
    $output = date('H');

    //get minute
    $output = date('i');

    //get second
    $output = date('s');

    //get AM or PM
    $output = date('a');

    //get full date and time
    $output = date('Y-m-d h:i:s a');
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