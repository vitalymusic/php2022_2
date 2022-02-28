<?php 
error_reporting(1);
    if(!$_POST){
        die("Hacker go away");
    }

    include 'connection.php';


    // $name = mysqli_real_escape_string($conn,$_POST["name"]);
    // $surname = mysqli_real_escape_string($conn,$_POST["surname"]);

    //$sql = "INSERT INTO users (name, surname) VALUES (\"$name\", \"$surname\")";
     // if(!mysqli_query($conn,$sql)){
    //     die("Error: " . mysqli_error($conn));
    // }

    //second option

    $name = $_POST["name"];
    $surname = $_POST["surname"];

    $stmt = mysqli_prepare($conn, "INSERT INTO users (name, surname) VALUES (?,?)");
    mysqli_stmt_bind_param($stmt, "ss" ,$name,$surname);

    
    if(!mysqli_stmt_execute($stmt)){
        die("Error: " . mysqli_error($conn));
    }


   


    mysqli_close($conn);
    header('location:selectdata.php');
    // mysqli_real_escape_string
?>