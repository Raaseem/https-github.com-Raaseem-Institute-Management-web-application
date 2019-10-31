<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from subject where sub_id='$get_id'")or die(mysql_error());
header('location:subject_project.php');
?>