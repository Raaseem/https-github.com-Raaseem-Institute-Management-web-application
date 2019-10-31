<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from timetable where tt_id='$get_id'")or die(mysql_error());
header('location:timetable_project.php');
?>