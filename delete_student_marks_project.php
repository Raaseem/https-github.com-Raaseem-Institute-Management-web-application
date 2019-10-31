<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from class_test where class_test_id='$get_id'")or die(mysql_error());
header('location:student_marks_project.php');
?>