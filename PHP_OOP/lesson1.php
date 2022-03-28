<?php 

// PHP classes
class User {
    function __construct($name,$surname,$login){
        $this->name = $name;
        $this->surname = $surname;
        $this->login = $login;
    }

//свойства
    protected $name;
    protected $surname;
    private $username;
//Методы
    function sayHello(){
        echo "Hello";
    }

    function setName($name){
        $this->name = $name;
    }
    function setSurname($surname){
        $this->surname = $surname;
    }

}


$user1 = new User("Peter","Parker","user@user.com");




var_dump($user1);
// echo $user1->name;
// 1. сделать одну страницу для wordpress вывод статей (новостей) использовать Bootstrap
// 2. сделать класс, который будет отображать страницу Класс Posts Содержит метод для вывода страницы


?>