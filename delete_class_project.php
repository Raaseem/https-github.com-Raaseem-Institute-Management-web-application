<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from class where class_id='$get_id'")or die(mysql_error());
header('location:class_project.php');
?>