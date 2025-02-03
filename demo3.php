<?php 

//string
$name = " Monkey D. Luffy";
$name2 = "Ronona Zoro";
var_dump($name2);
echo '<br>';
echo gettype($name);
echo '<br>';

//integer
$age = 35;
var_dump($age);
echo '<br>';

//float
$rating = 4.5;
var_dump($rating);
echo '<br>';

//boolean
$is_loaded = true;
var_dump($is_loaded);
echo '<br>';

$is_full = false;
var_dump($is_full);
echo '<br>';

//array
$fruits = array('Apple', 'Banana', 'Mango');
var_dump($fruits);
echo '<br>';
echo getType($fruits);

//Object
$person = new stdClass();
var_dump($person);
echo '<br>';
echo getType($person);
echo '<br>';

//NULL
$animal = null;
var_dump($animal);
echo '<br>';