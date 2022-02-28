<!-- php.ini 

file_uploads = on;
upload_max_filesize = 10m; -->

<!-- 755 chmod -->


<?php 
    
    $dir = 'uploads/';
    echo move_uploaded_file($_FILES["file"]["tmp_name"], $dir . $_FILES["file"]["name"]);
    // var_dump($_FILES);
    //scandir - массив (обрезать первые 2 элемента)
    //slice - убрать первые 2 элемента

    
    //https://www.php.net/manual/en/function.scandir



?>