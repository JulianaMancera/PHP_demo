<?php 
//Array Functions


//The count() function returns the number of elements in an array.
$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

echo '<pre>';
    //var_dump(count($users));
    //var_dump(count($ids));
echo '</pre>';

//The sort() function sorts an indexed array in ascending order.
sort($ids);
sort($users);

echo '<pre>';
    //var_dump($ids);
    //var_dump($users);
echo '</pre>';

//The rsort() function sorts an indexed array in decending order.
rsort($ids);
rsort($users);

echo '<pre>';
    //var_dump($ids);
    //var_dump($users);
echo '</pre>';

// The array_push() function inserts one or more elements to the end of an array.
array_push($ids, 100);
array_push($users, 'user4');

echo '<pre>';
    //var_dump($ids);
    //var_dump($users);
echo '</pre>';

// The array_pop() function deletes the last element of an array.
array_pop($ids);
array_pop($users);

echo '<pre>';
    //var_dump($ids);
    //var_dump($users);
echo '</pre>';

//The array_shift() function removes the first element of an array, and returns the value of the removed element.
array_shift($ids);
array_shift($users);

echo '<pre>';
    //var_dump($ids);
    //var_dump($users);
echo '</pre>';

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

array_unshift($ids, 200);
array_unshift($users, 'user5');

echo '<pre>';
    //var_dump($ids);
    //var_dump($users);
echo '</pre>';

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

//The array_slice() function returns selected parts of an array.
$ids2 = array_slice($ids, 1, 3);
echo '<pre>';
    //var_dump($ids2);
echo '</pre>';

//The array_sum() function returns the sum of all the values in the array
$output = 'Sum of IDs: ' .array_sum($ids);
    //echo $output;

//The array_search() function search an array for a value and returns value
$output = 'User 1 is at index: ' .array_search('user1', $users);
    echo $output;

//The explode() function breaks a string into an array.

$tags = 'tech,code,programming';
$tagsArr = explode(',', $tags);

echo '<pre>';
    var_dump($tagsArr);
echo '</pre>';

//The impolde() function returns a string from the elemets of an array.
$output = implode(', ', $users);

echo $output;