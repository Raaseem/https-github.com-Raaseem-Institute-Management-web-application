<?php
include('connect_project.php');
$get_id=$_GET['id'];
mysql_query("delete from payment where pay_id='$get_id'")or die(mysql_error());
header('location:payment_project.php');
?>