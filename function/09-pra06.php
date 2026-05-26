<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
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

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: white;
            font-size: 1.8rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        h3 {
            color: white;
            font-size: 1.3rem;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .result {
            background: rgba(255, 255, 255, 0.15);
            padding: 15px;
            border-radius: 8px;
            color: white;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1rem;
            /* line-height: 1.8; */
        }

        .back-button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .back-button:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>以 * 符號為基礎在網頁上排列出下列圖形:</h2>

    <div class="result">
        <h3>直角三角型</h3>
        <?php 
        for($i=0;$i<5;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "<br>";
        }

        echo "<hr style='border: 1px solid rgba(255,255,255,0.3); margin: 15px 0;'>";

        for($i=0;$i<5;$i++){
            for($j=0;$j<5;$j++){
                if($i>=$j){
                    echo "*";
                }
            }
            echo "<br>";
        }
        ?>

        <h3 style="margin-top: 20px;">倒直角三角型</h3>
        <?php 
        for($i=5;$i>0;$i--){
            for($j=0;$j<$i;$j++){
                echo "*";
            }
            echo "<br>";
        }
        ?>

        <h3 style="margin-top: 20px;">正三角型</h3>
        <?php 
        for($i=0;$i<5;$i++){
            for($j=0;$j<4-$i;$j++){
                echo "&nbsp;";
            }
            for($k=0;$k<2*$i+1;$k++){
                echo "*";
            }
            echo "<br>";
        }
        ?>

        <h3 style="margin-top: 20px;">菱型</h3>

        <?php 
        //兩個正反的正三角型組合成菱形
        for($i=0;$i<5;$i++){
            for($j=0;$j<4-$i;$j++){
                echo "&nbsp;";
            }
            for($k=0;$k<2*$i+1;$k++){
                echo "*";
            }
            echo "<br>";
        }
        for($i=3;$i>=0;$i--){
            for($j=0;$j<4-$i;$j++){
                echo "&nbsp;";
            }
            for($k=0;$k<2*$i+1;$k++){
                echo "*";
            }
            echo "<br>";
        }


        ?>
    <hr>
    <?php
        for($i=0;$i<9;$i++){
            if($i<=4){
                $t=$i;
            }else{
                $t=8-$i;
            }
    echo $i;
    echo ",";
    echo $t;
    echo ",";
    echo 4-$t;
    echo ",";
    echo 2*$t+1;
    echo ",";
            for($j=0;$j<4-$t;$j++){
                echo "&nbsp;";
            }
            for($k=0;$k<2*$t+1;$k++){
                echo "*";
            }
            echo "<br>";
        }

    ?>

        <h3>矩形</h3>
    <?php
    for($i=0;$i<7;$i++){

        for($j=0;$j<7;$j++){
            if($i==0 || $i==6){
                echo "*";
            }else if($j==0 || $j==6){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";

    }

    ?>
        <h3>內含對角線的矩形</h3>
            <?php
            $n=11;
    for($i=0;$i<11;$i++){

        for($j=0;$j<11;$j++){
            if($i==0 || $i==10){
                echo "*";
            }else if($j==0 || $j==10 || $i==$j || $i==10-$j){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";

    }

    ?>

    <h3>參數化圖形-可任意變更大小</h3>
    <?php
    $n="afdsfs";
    if(!is_numeric($n)){
        echo "n 必須為數字<br>";
        $n=5;
    }
    if($n<3){
        echo "n 必須大於等於 3<br>";
        $n=5;
    }
    if($n%2==0){
        $n=$n+1;
    }
    for($i=0;$i<$n;$i++){

        for($j=0;$j<$n;$j++){
            if($i==0 || $i==$n-1){
                echo "*";
            }else if($j==0 || $j==$n-1 || $i==$j || $i==$n-1-$j){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";

    }

    ?>



    </div>
    <a href="index.html" class="back-button">返回首頁</a>
</div>

</body>
</html>