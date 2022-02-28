<?php 
    /* text 
    kjh kjh kj jh
    
    */
    //переменные
    $color="green"; //String
    $Color = "blue";
    $age = 35;//int
    $sum = 10.25; //float
    $bool = true; //boolean
    $fool = NULL;
    $arr1 = ["First","Second"];
    $username = "Vitaly";
    //var_dump($arr1);
    //echo $arr1;
    //Math char + - * / %
    //$result = $age + 20;
    //$result = $age /= 5;
    // Increment Decrement
    //$result = $age === "35";
    $result = --$age;
    //$result++ --$result 
     //Logic

     // && ||  !

     $result = ($age >10 && $age < 50); //true
     $result = ($age <10 || $age <50);//true


      //Concat
    // . .=

    $result = "<h1>вас зовут " . $username . " Ваш возраст " . $age ."</h1>";

    $result .= $username;

    //Ternate

    //$result = $age>18?"Совершеннолетие":"Несовершеннолетний";


    $data =  <<< _END

    <h2>Lorem ipsum</h2>
    <h2>Lorem ipsum</h2>
    <h2>Lorem ipsum</h2>
    <h2>Lorem ipsum</h2>
    <h2>Lorem ipsum</h2>
    _END;

    define("YOUR_NAME","Vitaly");




    //<= >= <> != 

    //$result = "Your name is " . $username . "!";

   // echo $data;
   echo YOUR_NAME;

   var_dump($GLOBALS);
?>