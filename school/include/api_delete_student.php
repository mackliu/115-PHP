<?php include "db_conn.php";
$num=$_POST['school_num'];

$class_code=$pdo->query("SELECT `class_code` FROM `class_student` WHERE `school_num`='{$num}'")->fetchColumn();

/* $sql_students="DELETE FROM `students` WHERE `school_num`='{$num}'";
$sql_class_student="DELETE FROM `class_student` WHERE `school_num`='{$num}'";
$sql_socres="DELETE FROM `student_scores` WHERE `school_num`='{$num}'";

$pdo->exec($sql_students);
$pdo->exec($sql_class_student); 
$pdo->exec($sql_socres);
 */
delete('students',$_POST);
delete('class_student',$_POST);
delete('student_scores',$_POST);


header("location:../admin.php?inc=class_students&code={$class_code}");



?>