<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['sid'];
?>
<?php error_reporting(E_ERROR); ?>

<?php
$count = 0;
$finishQuiz=0;
							
$batch_id = $_POST['batch_id'];
$que_id = $_POST['que_id'];
$gett_id = $_POST['test_no'];
$option = $_POST['option'];

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
							
							<form class="form-horizontal" method="POST" action="next_mcq_project.php">
                            
					<?php	
					
							$mcq1_query=mysql_query("select que_id from mcq_question where test_no='$gett_id' and batch_id='$batch_id'")or die(mysql_error());
							$row=mysql_fetch_array($mcq1_query);

							while(mysql_fetch_array($mcq1_query)) {
								$row['que_id'];
								$count = $count + 1;
							}
							$count = $count + 1;

							mysql_query("insert into mcq_answer (stu_id,batch_id,test_no,que_id,answer)
										values ('$get_id','$batch_id','$gett_id','$que_id','$option')") or die(mysql_error());
										
							
							$payment_query=mysql_query("SELECT mcq_question.correct_answer, mcq_answer.answer from mcq_answer, mcq_question where mcq_question.que_id=mcq_answer.que_id 
														and mcq_question.test_no=mcq_answer.test_no and mcq_question.batch_id=mcq_answer.batch_id 
														and mcq_answer.stu_id='$get_id' and mcq_answer.batch_id='$batch_id' and
														 mcq_answer.test_no='$gett_id' ")or die(mysql_error());
								while($row=mysql_fetch_array($payment_query)){
								
								if($row['correct_answer']==$row['answer']){
								$ansCount = $ansCount + 1;
								}
								}			
								$ansCount;
								
								$que_id = $que_id + 1;
  
							if($que_id > $count) {
								$finishQuiz="1";
							}
  						
							else{
								$mcq_query=mysql_query("select * from mcq_question where test_no='$gett_id' and que_id='$que_id' and batch_id='$batch_id'")or die(mysql_error());
								$row=mysql_fetch_array($mcq_query);
					?>
							
								<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">

<tr>
<td bgcolor="#F8F7F1"><input name="que_id" type="hidden" value="<?php echo $que_id; ?>"></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><input name="test_no" type="hidden" value="<?php echo $gett_id; ?>"></td>
</tr>

<tr>
<td bgcolor="#F8F7F1"><input name="batch_id" type="hidden" value="<?php echo $batch_id; ?>"></td>
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

							<?php }
											
							if($finishQuiz=="1"){
		            
							?>
									
								<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
								<tr>
								<td bgcolor="#F8F7F1"><strong>Successfully Completed The Quiz!!!</strong><br><br></td>
								</tr>
								<tr>
								<td bgcolor="#F8F7F1"><strong>Your Score Is :</strong> <?php echo $ansCount . " / " . $count; ?> <br><br></td>
								</tr>
								</table>
								
								
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Answers & Explanations</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
										<th>Question ID</th>
                                        <th>Question</th>
										<th>Option 1</th>
										<th>Option 2</th>
										<th>Option 3</th>
										<th>Option 4</th>
										<th>Option 5</th>
										<th>Correct Answer</th>
										<th>Explanation</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from mcq_question where test_no='$gett_id' and batch_id='$batch_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                       $que_id = $row['que_id'];
                                        ?>

                                    <tr class="odd gradeX">
                                       
										<td><?php echo $row['que_id']; ?></td>
                                        <td><?php echo $row['question']; ?></td> 
                                        <td><?php echo $row['option1']; ?></td>
										<td><?php echo $row['option2']; ?></td>
										<td><?php echo $row['option3']; ?></td>
										<td><?php echo $row['option4']; ?></td>
										<td><?php echo $row['option5']; ?></td>
										<td><?php echo $row['correct_answer']; ?></td>
										<td><?php echo $row['explanation']; ?></td>
										
									<tr>
							<?php } ?>
							 </tbody>
                            </table>
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