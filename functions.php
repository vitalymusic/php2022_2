<?php 
$result = "";
function sayHello($min,$max,$result){
    //global $result;

    for($x=$min;$x<=$max;$x++){
        $result .= "<h1>Title$x</h1>";
    }
    return $result;
    
}

//echo sayHello();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=sayHello(0,10,$result)?>
</body>
</html>