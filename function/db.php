<?php 
$dsn="mysql:host=localhost;dbname=school;charset=utf8";
$pdo=new PDO($dsn,'root','');

function all($table){
    //連線資料庫
    global $pdo;
    $rows=$pdo->query("SELECT * FROM $table")->fetchAll(PDO::FETCH_ASSOC);

    return $rows; //整個$table 的資料
}

function find($table,$id){
    //連線資料庫
    global $pdo;

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

function update($table,$id,$cols){
    global $pdo;

    $sql="UPDATE $table SET ";
    $tmp=[];
    foreach($cols as $key => $val){
        $tmp[]="`$key`='$val'";
    }
     
    $sql .= join(",",$tmp);
    $sql .= " WHERE `id`='$id'";

    //echo $sql;
 return $pdo->exec($sql);
}

/* echo "<pre>";
 print_r(all('status'));
 echo "</pre>"; */

/* $rows=all('status');
$row=find('status',1);
echo "<pre>";
 print_r($row);
 echo "</pre>"; */

 update('status',4,['note'=>'持有國中修(結)業證明書者(修畢三年以上)']);
?>



