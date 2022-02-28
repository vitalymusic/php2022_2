<?php
//$x = 20;
// while($x<10){
//     echo "<img src=\"img$x.jpg\">";
//     $x++;
// }
// do{
//     echo "<img src=\"img$x.jpg\">";
//     $x++;
// }
// while($x<10);


for($x=0;$x<=20;$x++){
    echo "<img src=\"img$x.jpg\">";
    $x++;
}


$menu = [
    "Main", 
    "About",
    "Contacts"
];

$files = [
    "File1"=>"document1.docx",
    "File2"=>"document2.docx",
    "File3"=>"document3.docx"
];


for($y=100;$y>0;$y--){
    if($y%5==0){
       // echo $y ."<br>";
    }else{
        //break;
        continue;
    }
}


$month = 1;
$out;
switch ($month){
    case 1:$out = "January";break;
    case 2:echo "February";break;
    case 3:echo "March";break;
    case 4:echo "April";break;
    case 5:echo "May";break;
    default: echo "Not correct";break;
}
echo $out;



exit();

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
    <nav>
        <ul>
            <?php 
                foreach($menu as $menuItem){
                    echo "<li><a href=\" ". strtolower($menuItem). ".php\">$menuItem</a></li>";
                }
            ?>
        </ul>
    </nav>


    <ul>
        <?php foreach($files as $key=>$value){
            echo "<li><a href=\" ".strtolower($value)."\">$key</a></li>";
        }
        ?>
    </ul>
</body>
</html>
