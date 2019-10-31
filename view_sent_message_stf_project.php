<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); 
$get_id=$_GET['id']; ?>
<?php
$tbl_name="message_staff";
$sql=mysql_query("select * from  $tbl_name where mess_id='$get_id'")or die(mysql_error());
$rows=mysql_fetch_array($sql);
?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">						
							<a href="sent_message_stf_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
						<br>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">

<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">

<tr>
<td bgcolor="#F8F7F1"><strong>Subject : <?php echo $rows['subject']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Message : </strong><?php echo $rows['description']; ?></td>
</tr>

</table>
</td>
</tr>
</table>
<BR>

</div>
</div>
</div>
<?php include('footer_project.php'); ?>
</div>
</div>
</div>

</body>
</html>