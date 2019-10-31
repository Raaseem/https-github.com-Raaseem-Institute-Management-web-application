<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from message where mess_id='$get_id'")or die(mysql_error());
header('location:message_project.php');
?>