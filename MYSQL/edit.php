<?php 

if($_GET["id"]){
    include 'connection.php';
    $userId = $_GET["id"];


    $sql = "SELECT * FROM users WHERE id = $userId";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
    }

}

?>

<h1>Edit Users</h1>

<form action="update.php" method="POST">
                 <input type="hidden" value="<?=$row["id"]?>" name="id">
                 <input type="text" name="name" value="<?=$row["name"]?>">
                 <input type="text" name="surname" value="<?=$row["surname"]?>">
                 <input type="submit" value="Update">
    </form>    