<?php 
    include 'connection.php';


    // var_dump($conn);

    $sql = "SELECT * FROM users";

    $result = mysqli_query($conn,$sql);

    //var_dump($result);

    




    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>
    <table border="1" width="50%">
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php 
            if(mysqli_num_rows($result)>0): ?>
                <?php while($row = mysqli_fetch_assoc($result)):?>
                    <tr>
                        <td><?= $row["name"]?></td>
                        <td><?= $row["surname"]?></td>
                        <td><a href="edit.php?id=<?= $row["id"]?>">Edit</a></td>
                        <td><a href="delete.php?id=<?= $row["id"]?>">Delete</a></td>
                    </tr>
                <?php 
                 endwhile;
                endif
                ?>
    </table>

    <h2>Add user</h2>

    <form action="addnew.php" method="POST">
                 <input type="text" name="name">
                 <input type="text" name="surname">
                 <input type="submit" value="Save">
                 
    </form>             

</body>
</html>

<?php 
    mysqli_close($conn);
?>