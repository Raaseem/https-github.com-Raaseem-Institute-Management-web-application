<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from mcq_question where que_id='$get_id'")or die(mysql_error());
header('location:view_mcq_project.php');
?>