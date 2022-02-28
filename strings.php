
<?php 

$str = "Hello World!";

$result = mb_strlen($str); //strlen()
$result = str_word_count($str);
$result = strrev($str);
$result = trim($str);
$result = addslashes($str);
$result = htmlentities($str);
$result = md5($str); 
$result = sha1($str);
$str2 = strtolower($str); //strtoupper()
$result = ucfirst($str2);
$result = substr($str,-3);

//explode implode() = join()

//Калькулятор цен на покраску стен (длинна, ширина и высота, вывод результата с элементами HTML)
//Калькулятор зарплаты налогов/кредита вывод результата с элементами HTML



var_dump($result);
//echo $result;
?>