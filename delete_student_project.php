<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from student where stu_id='$get_id'")or die(mysql_error());
header('location:student_project.php');
?>