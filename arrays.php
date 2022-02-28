<?php 
    $arr = ["Moscow","Riga","Berlin"]; // array() start from 0

    $arr2 = [
        "username"=>"Vitaly",
        "age"=>35,
        "heiht"=>172
    ];
    $table = [ //3x3
        ["Janis","Berzins",30],
        ["Anna","Lapiņa",25],
        ["Roberts","Zariņš",45]
    ];

    // var_dump($arr);
    // var_dump($arr2);

    echo $arr[0];
    echo $arr["username"];
    array_push($arr,"Tallin");
    array_push($arr2,["width"=>72]);

    $arr[] = "Piter";


    echo $arr[0];
    echo $arr["username"];
   

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
    <?php if($arr2):?>
        html
    <?php endif ?>    
    <?php 
        // foreach($arr as $item){
        //     echo "<a href=\"\">{$item}</a>";
        // }
        
        foreach($arr as $item):?>
            <a href="<?=$item?>"><?=$item?></a>
        <?php endforeach?>
<?php
        foreach($arr2 as $value=>$key):?>
            <h3><?=$value?> : <?=$key?></h3>
        <?php endforeach?>
            <!-- For -->
            <?php 
            // for($i=0;$i<sizeof($table);$i++){
            //     echo "<tr>";
            //     for($j=0;$j<sizeof($table[$i]);$j++){
            //           echo "<td>". $table[$i][$j] ."</td>";  
            //     }
            //     echo "</tr>";
            // }
            
            ?>


        <?php 
        foreach($table as $row){
            echo "<tr>";
            foreach($row as $item){
                echo "<td>$item</td>";
            }
            echo "</tr>";
        }

        //sizeof($arr) //count
        //is_array($arr) true false

        //sort($arr,SORT_STRING) //SORT_NUMERIC
        //shuffle($arr)
        //explode(",",$string)

       $str = "Name,Surname,Lastname";
       $result = explode(",",$str);
        $data["users"] = "Other";
        $data["other"] = false;
       
       extract($data,EXTR_OVERWRITE);
       echo "<p>" . $users. "</p>";

       $username = "Alex";
       $pass = "12345";
       $mail = "test@test.lv";

       $data2 = compact('username','pass','mail');
       var_dump($data2);

            
        
        
        ?>
        


    
</body>
</html>