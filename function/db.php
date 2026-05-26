<?php 

function all($table){
    //連線資料庫
    $dsn="mysql:host=localhost;dbname=school;charset=utf8";
    $pdo=new PDO($dsn,'root','');
    $rows=$pdo->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);

    return $rows; //整個$table 的資料
}

/* echo "<pre>";
 print_r(all('status'));
 echo "</pre>"; */

$rows=all('status');

?>



