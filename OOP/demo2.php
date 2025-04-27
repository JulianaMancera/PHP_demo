<?php 

/*
Access Modifiers
    public
    -> The property or method can be accessed from anywhere. This is the default if you leave the modifier

    protected
    -> The property or method can be accessed from within the class or class that inherits from it

    private
    -> The property or method can ONLY can accessed from within the class
*/

class User{

    //properties
    public $name;
    public $email;
    private $status = 'active';

    public function __construct($name, $email){

        $this -> name = $name;
        $this -> email = $email;

    }
    //methods
    public function login(){

        echo $this->name . ' The user loggin in';
    }
    //getter method
    public function getStatus(){
        echo $this->status;
    }

    //setter method
    public function setStatus($status){
        $this->status = $status;
    }

}

// Instantiate a new object
$user1 = new User('Monkey D. Luffy', 'monkey@gmail.com');
$user1->login();

$user2 = new User('Rorona Zoro', 'rorona@gmail.com');
$user2->login();

$user2->setStatus('inactive');
$user2->getStatus();