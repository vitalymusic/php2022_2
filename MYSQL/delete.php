<?php 
    include 'connection.php';

    if($_GET["id"]){
        $userId = mysqli_real_escape_string($conn,$_GET["id"]);
        $sql = "DELETE FROM users WHERE id = $userId";


        if(!mysqli_query($conn,$sql)){
                die("Error: " . mysqli_error($conn));
            }
        mysqli_close($conn);
        header('location:selectdata.php');
    }
?>