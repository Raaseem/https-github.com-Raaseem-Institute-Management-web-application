<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from staff where staff_id='$get_id'")or die(mysql_error());
header('location:staff_project.php');
?>