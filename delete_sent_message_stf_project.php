<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from message_staff where mess_id='$get_id'")or die(mysql_error());
header('location:sent_message_stf_project.php');
?>