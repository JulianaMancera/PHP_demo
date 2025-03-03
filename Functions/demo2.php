<?php

//Functions Arguments

    function add($a, $b){

        return $a + $b;
    }

    echo add(1, 2);
    echo'<br>';
    echo add(5, 5);
    echo'<br>';
    echo add(10, 20);
    echo'<br>';

    //default arguments
    function sayHello($name = 'World'){

        return 'Hello ' . $name;

    }

    $greetings = sayHello();
    echo $greetings;
    echo'<br>';
    $greetings2 = sayHello('Luffy');
    echo $greetings2;

    //variable argument

    echo '<br>';

    function addAll(...$numbers){
        $total = 0;
        foreach($numbers as $number){
            $total += $number;

        }
        return $total;



    }

    echo addAll(1, 2, 3, 4, 5);
    echo '<br>';
    echo addAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
?>