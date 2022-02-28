<?php
session_start();

//var_dump($_SESSION);

$user = "admin";
$pass = md5("12345");

if($_POST && $_POST["username"]!="" && $_POST["password"]!=""){
    if($_POST["username"]==$user && md5($_POST["password"])==$pass){
        $_SESSION["user"] = $_POST["username"];
        $_SESSION["logged_in"] = true;
        header("Location:start.php");
    }else{
        $_SESSION["user"]="";
        $_SESSION["logged_in"] = false;
        $_SESSION["error"] = "Wrong Username or Password";
        header("auth.php");
        
    }
}else{
    $_SESSION["error"] = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login please</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" >
    </form>

    <div>
        <?php if($_SESSION && $_SESSION["error"]){
            echo $_SESSION["error"];
        } ?>
    </div>


    1. Доработать калькуляторы используя функции, Формы, циклы (для вывода данных)
    2  Сделать открытые и закрытые (под паролем документы)
    3. Сверстать админку сайта Bootstrap
</body>
</html>