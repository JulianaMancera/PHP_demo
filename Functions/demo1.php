<?php
/*Functions and Return value
    A function is a block of statements that can used repeatedly in a program.
    A function will not execute automatically when a page loads.
    A function will be executed by call to the function.*/


    //Simple function

    function sayHello(){
        echo 'Hello';
    }

    //call the function
    //sayHello();
    //sayHello();
   
    //function return a value
    function sayGoodbye(){
        return 'Goodbye';
    }

    sayGoodbye();
    //echo sayGoodbye();

    //store return value in a variable
    $goodbye = sayGoodbye();

    echo $goodbye;

?>