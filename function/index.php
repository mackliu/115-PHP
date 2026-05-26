<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>自訂函式</title>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: monospace;  
            min-height: 100vh;
            padding: 40px 20px;
        }    
</style>
</head>
<body>
<h2>自訂函式</h2>  
<?php

sum("2026泰山訓練場",1,12,444,665,88,43,11123,5543,2132);

echo "<hr>";
$total=add(5,10);

echo $total;


name("劉","勤永");
?>
<h2>畫星星函式</h2>
<?php 
triangle_stars(10);
square_stars(20);
?>
</body>
</html>
<?php 

//把姓和名組合成一個完整的名字
function name($first_name, $last_name) {
    echo  $first_name . " " . $last_name;
}

//數字相加的函式
function add($num1,$num2){
    return $num1 + $num2;
}

function sum($title,...$nums){
    $tmp=0;
    echo $title."年終結算:";
    foreach($nums as $num){
        $tmp =$num+$tmp;
        echo $num." + ";
    }

   echo "=". $tmp;
   echo "<br>";
}

function triangle_stars($size=5){
    
for($i=0;$i<$size;$i++){
    for($j=0;$j<$size-1-$i;$j++){
        echo "&nbsp;";
    }
    for($k=0;$k<2*$i+1;$k++){
        echo "*";
    }
    echo "<br>";
}
}

function square_stars($size=5){
        for($i=0;$i<$size;$i++){

        for($j=0;$j<$size;$j++){
            if($i==0 || $i==$size-1){
                echo "*";
            }else if($j==0 || $j==$size-1){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";

    }
}
?>


