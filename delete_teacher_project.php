<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from tutor where tutor_id='$get_id'")or die(mysql_error());
header('location:teacher_project.php');