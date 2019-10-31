<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from admin where admin_id='$get_id'")or die(mysql_error());
header('location:admin_project.php');
?>