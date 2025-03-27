<?php 

//Creating Classes and Constructor

class User{

    //properties
    public $name;
    public $email;

    public function __construct($name, $email){

        $this -> name = $name;
        $this -> email = $email;

    }

    /*
    public function __construct(){
        echo 'This is constructor initialized...';
    }
    */

    //methods
    public function login(){

        echo $this->name . ' The user loggin in';
    }
    public function loginemail(){

        echo $this->email . ' The user email loggin in';
    }
}

$user1 = new User('Charles Leclerc', 'leclerc@gmail.com');
$user1->login();
echo '<br>';
$user1->loginemail();

echo '<br>';
echo '<br>';

$user2 = new User('Felix Lee', 'lee@gmail.com');
$user2->login();
echo '<br>';
$user2->loginemail();


/*
//instantiate a new object
 $user1 = new User();
 $user1 -> name = 'Monkey D. Luffy';
 $user1 -> email = 'monekey@gmail.com';

//var_dump($user1);

 //$user1 -> login();

 $user2 = new User();
 $user2 -> name = 'Charles Leclerc';
 $user2 -> email = 'leclerc@gmail.com';

 //var_dump($user2);

 //$user2 -> login();

 echo $user1 -> name;
 echo '<br>';
 echo $user2 -> name;*/