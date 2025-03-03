<?php

//Arrow Function

    function add($a, $b){

        return $a + $b;
    }

    echo add(2, 3);
    echo '<br>';
    $add = fn ($a, $b) => $a + $b;

    echo $add(2, 5);
