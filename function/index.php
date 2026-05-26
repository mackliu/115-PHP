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
/* triangle_stars(5);
square_stars(5);
diamond_stars(22); */
stars('diamond',10);
stars('triangle',10);
stars('square',10);
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

function stars($shape="triangle",$size=5){
    switch($shape){
        case "triangle":
            triangle_stars($size);
            break;
        case "square":
            square_stars($size);
            break;
        case "diamond":
            diamond_stars($size);
            break;
        default:
            echo "不支援的圖形";
    }
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

function diamond_stars($size=5){
    if(!is_numeric($size)){
        echo "n 必須為數字<br>";
        $size=5;
    }
    if($size<3){
        echo "n 必須大於等於 3<br>";
        $size=5;
    }
    if($size%2==0){
        $size=$size+1;
    }
    for($i=0;$i<$size;$i++){
        if($i<=floor($size/2)){
            $t=$i;
        }else{
            $t=$size-1-$i;
        }

        for($j=0;$j<floor($size/2)-$t;$j++){
            echo "&nbsp;";
        }
        for($k=0;$k<2*$t+1;$k++){
            echo "*";
        }
        echo "<br>";
    }
}
?>


