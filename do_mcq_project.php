<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['sid']; ?>
<?php error_reporting(E_ERROR); ?>

<?php
$batch_id = $_POST['batch_id'];
$gett_id = $_POST['test_no'];
$que_id = 1;
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
                            <a href="mcq1.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
							<?php
								 $query = mysql_query("select stu_id from mcq_answer where stu_id='$get_id' and batch_id='$batch_id' and test_no='$gett_id'");
								 while ($row = mysql_fetch_array($query)){
								$stu_id= $row['stu_id'];
								}
								if($stu_id==$get_id){
								echo "Sorry, You Have Already Done This Quiz!!!";
								}
					
								else{
								$mcq_query=mysql_query("select * from mcq_question where test_no='$gett_id' and que_id='$que_id' and batch_id='$batch_id' ")or die(mysql_error());
								$row=mysql_fetch_array($mcq_query);
							?>
							
							<form class="form-horizontal" method="POST" action="next_mcq_project.php">
                            
							<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
							
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">

<tr>
<td bgcolor="#F8F7F1"><input name="batch_id" type="hidden" value="<?php echo $batch_id; ?>"></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><input name="que_id" type="hidden" value="<?php echo $que_id; ?>"></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><input name="test_no" type="hidden" value="<?php echo $gett_id; ?>"></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong><?php echo $que_id;?>.Question :</strong> <?php echo $row['question']; ?> <br><br></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Option 1 : <input name="option" type="radio" value="1">&nbsp;&nbsp;</strong><?php echo $row['option1']; ?><br><br></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Option 2 : <input name="option" type="radio" value="2">&nbsp;&nbsp;</strong><?php echo $row['option2']; ?><br><br></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Option 3 : <input name="option" type="radio" value="3">&nbsp;&nbsp;</strong><?php echo $row['option3']; ?><br><br></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Option 4 : <input name="option" type="radio" value="4">&nbsp;&nbsp;</strong><?php echo $row['option4']; ?><br><br></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><strong>Option 5 : <input name="option" type="radio" value="5">&nbsp;&nbsp;</strong><?php echo $row['option5']; ?><br><br></td>
</tr>

</table></td>
</tr>
</table>
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-upload icon-large"></i>&nbsp;Next</button>
                                    </div>
                                </div>
                            </form>
							
							<?php } ?>

                        </div>
                    </div>
                </div>
				
			<?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>