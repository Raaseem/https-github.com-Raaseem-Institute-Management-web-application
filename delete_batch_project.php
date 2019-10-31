<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from batch where batch_id='$get_id'")or die(mysql_error());
header('location:batch_project.php');
?>