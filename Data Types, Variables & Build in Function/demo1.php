<?php
// this is a single-line comment
echo 'This is an echo statement';
echo '<br>';
print'This is a print statement';
print '<br>';
echo ' This is line 1', 'This is line 2';
echo '<br>';

/*This is a multi-line comment
this is line 2
this is line 1
*/

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> <?php echo 'Learn PHP From Scratch'; ?></title>
</head>

<body class="bg-gray-100">
<header class="bg-gradient-to-r from-purple-500 to-violet-700 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?='Learn PHP From Scratch'?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4">Welcome To The Course</h2>
            <p>In this course, you will whi the fundamentals of the PHP language</p>
        </div>
    </div>
</body>

</html>