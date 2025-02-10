<?php

$names = array('John', 'Jack', 'Jill');
$numbers = [1,2,3,4,5,6];

//var_dump($names[1]);

//echo $names[0];

$numbers[] = 100;
$numbers[] = 101;

$numbers[3] = 400;

unset($numbers[3]); // to remove

$numbers = array_values($numbers); //reindex

echo '<pre>';
var_dump($numbers);
echo '</pre>';



