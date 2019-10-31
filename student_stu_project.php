<?php include('header_project.php'); ?>
<?php //include('session_project.php'); ?>
<?php  session_start();
$get_id=$_SESSION['sid']; ?>
<?php
$stu_query=mysql_query("select * from student where stu_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($stu_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
						
						<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
						 <a href="student_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
						  <a href="pw_stu.php" class="btn btn-success"><i class="icon- icon-large"></i>&nbsp;Change Password</a>
						  
                            <br><br>
							
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">

<tr>
<td bgcolor="#F8F7F1"><strong>Student ID : </strong> <?php echo $row['stu_id']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>First Name : </strong><?php echo $row['stu_fname']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Last Name : </strong><?php echo $row['stu_lname']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>House No : </strong><?php echo $row['house_no']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Street : </strong><?php echo $row['street_name']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>City : </strong><?php echo $row['city']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Mobile No : </strong><?php echo $row['mobile_no']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Land No : </strong><?php echo $row ['land_no']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Email ID : </strong><?php echo $row['email_id']; ?></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Image : </strong><img src="<?php echo $row['location']; ?>" width="40" height="40"/></td>
</tr>
<tr><td><br></td></tr>
<tr>
<td>
<a href="edit_student_stu_project.php" class="btn btn-success"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a></td>
</tr>

</table></td>
</tr>
</table>

</div>
</div>
</div>
						<?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>