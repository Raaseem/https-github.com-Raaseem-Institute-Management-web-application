<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from student_attendance where att_id='$get_id'")or die(mysql_error());
header('location:student_attendance_project.php');
?>