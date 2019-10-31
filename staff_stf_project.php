<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php  session_start();$get_id=$_SESSION['sid']; ?>
<?php
$stf_query=mysql_query("select * from staff where staff_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($stf_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
						
						 <a href="staff_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
						  <a href="pw_stf.php" class="btn btn-success"><i class="icon- icon-large"></i>&nbsp;Change Password</a>
                            <br>
							
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">

<tr>
<td bgcolor="#F8F7F1"><strong>Staff ID :</strong> <?php echo $row['staff_id']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>First Name : </strong><?php echo $row['stf_fname']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Last Name : </strong><?php echo $row['stf_lname']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>House No : </strong><?php echo $row['s_house_no']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Street : </strong><?php echo $row['s_street_name']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>City : </strong><?php echo $row['s_city']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Mobile No : </strong><?php echo $row['s_mobile_no']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Land No : </strong><?php echo $row ['s_land_no']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Email ID : </strong><?php echo $row['s_email_id']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Image : </strong><img src="<?php echo $row['s_location']; ?>" width="40" height="40"/></td>
</tr>
<tr><td><br></td></tr>
<tr>
<td>
<a href="edit_staff_stf_project.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a></td>
</tr>

</table></td>
</tr>
</table>


						<?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>

