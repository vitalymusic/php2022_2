<?php 
    $fname = 'reviews.data';
    $file = fopen($fname,'r');
    $data = explode(";",fread($file,filesize($fname)));
    fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
</head>
<body>
    <div class="container">
        <?php 
        if(sizeof($data)==0){
            return "No reviews";
        }
            foreach($data as $item){
                echo "<div class='review'>";
                echo $item;
                echo "</div>";
            }
        ?>
    </div>

    <h3>Write review</h3>
    <form action="addReview.php" method="POST">
        <input type="text" name="name">
        <input type="text" name="review">
        <input type="submit" value="Add review">
    </form>
    
</body>
</html>