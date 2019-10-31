<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from event where event_id='$get_id'")or die(mysql_error());
header('location:event_project.php');
?>