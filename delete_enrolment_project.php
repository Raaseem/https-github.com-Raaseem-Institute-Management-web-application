<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from student_batch where stu_bat_id='$get_id'")or die(mysql_error());
header('location:enroll_project.php');
?>