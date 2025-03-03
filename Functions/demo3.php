<?php
//Variable scope

//global scope
    $name = 'Luffy';

    function sayHello(){   
        //variable scope
        global $name;
        echo 'Hello '.$name;
    }

    //sayHello();

    function sayGoodbye(){
        $names = ['Luffy','Zoro','Sanji'];
        echo 'Goodbye '. $names[0];
    }
    //sayGoodbye

    echo $names[0];


