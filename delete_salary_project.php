<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from salary_tutor where sal_id='$get_id'")or die(mysql_error());
header('location:salary_project.php');
?>