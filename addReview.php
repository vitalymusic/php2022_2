
<?php 
if($_POST){
    if($_POST["name"]!="" && $_POST["review"]!=""){
        $name = $_POST["name"];
        $review = $_POST["review"];
        addReview($name,$review);
        header('location:reviews.php');
    }
}else{
    header('location:reviews.php');
}


function addReview($name,$review){
    $file = fopen('reviews.data','a+');
    $time = date('d-m-Y h:i',time());
    $text = "time: $time, name: $name, Review: $review;\n";
    fwrite($file,$text);
    fclose($file);
    return true;
}



    //echo $data;
?>