<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from parent where parent_id='$get_id'")or die(mysql_error());
header('location:parent_project.php');
?>