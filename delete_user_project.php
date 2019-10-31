<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from login where user_id='$get_id'")or die(mysql_error());
header('location:user_project.php');
?>
