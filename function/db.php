<?php 

function all($table){
    //連線資料庫
    $dsn="mysql:host=localhost;dbname=school;charset=utf8";
    $pdo=new PDO($dsn,'root','');
    $rows=$pdo->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);

    return $rows; //整個$table 的資料
}

function find($table,$id){
    //連線資料庫
    $dsn="mysql:host=localhost;dbname=school;charset=utf8";
    $pdo=new PDO($dsn,'root','');

    if(!is_numeric($id)){
        echo "ID 必須為數字";
        return false;
    }else if($id<1){
        echo "ID 必須大於等於 1";
        return false;
    }else if(!$pdo->query("SELECT count(*) FROM $table WHERE `id`='$id'")->fetchColumn()){
        echo "找不到指定的資料";
        return false;
    }

    $row=$pdo->query("SELECT * FROM $table WHERE `id`='$id'")->fetch(PDO::FETCH_ASSOC);

 return $row;
}

/* echo "<pre>";
 print_r(all('status'));
 echo "</pre>"; */

$rows=all('status');
$row=find('status',1);
echo "<pre>";
 print_r($row);
 echo "</pre>";
?>



