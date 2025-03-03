<?php 

//Function Anonynous Closure

//Anonynous function
    $square = function ($number){
    return $number * $number;
    };

    $result = $square(5);


    //echo 'The square of 5 is: ' . $result;

//closures and outer scope access

    function createCounter(){
        $count = 0;

          //define a closure that captures the $count variable
    $counter = function() use(&$count){
        return ++$count;
    };

    return $counter;
}

$counter = createCounter();

    echo $counter().'<br>';
    echo $counter().'<br>';
    echo $counter().'<br>';
    echo $counter().'<br>';
    echo $counter().'<br>';
    echo $counter().'<br>';

    