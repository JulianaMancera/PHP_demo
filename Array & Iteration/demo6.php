<?php

//Nested Loop

/*for($i = 0; $i < 5; $i++){

    for($j = 0; $j < 10; $j++){

        echo $i. ' - '.$j . '<br>';
    }


}*/

$i = 0;
while ($i < 5) {

    $j = 0;
    while ($j < 5) {
        echo $i. ' - '.$j . '<br>';
        $j++;
    }
    $i++;
}