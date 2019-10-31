<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from upload where id='$get_id'")or die(mysql_error());
header('location:learning_materials2_project.php');
?>