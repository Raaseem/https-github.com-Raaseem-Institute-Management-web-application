<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['aid']; 
$batch_id= $_POST['batch_id'];
?>
<body>

<div class="row-fluid">
  <div class="span12">
    <?php include('navbar_project.php'); ?>
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="hero-unit-3">
		  <a href="admin_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
		  <a href="payment1_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>
            
            <form class="form-horizontal" method="POST" >
			
								<div class="control-group">
									<label class="control-label" for="inputEmail">Batch ID</label>
									<div class="controls">
										<input type="text" name="batch_id" id="inputEmail" value="<?php echo $batch_id; ?>">
									</div>
								</div>
            
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Student ID</label>
                                    <div class="controls">
                                       <select name="stu_id" class="span3" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select * from student,batch,student_batch where student.stu_id=student_batch.stu_id and 
																	student_batch.batch_id=batch.batch_id and batch.batch_id='$batch_id'");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['stu_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Year</label>
									<div class="controls">
										<select name="year" class="span3" >
										<option selected="selected"></option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
										<option>2019</option>
										<option>2020</option>
										<option>2021</option>
										<option>2022</option>
										<option>2023</option>
										<option>2024</option>
										<option>2025</option>
										</select>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Month</label>
									<div class="controls">
										<select name="month" class="span3" >
										<option select="selected"></option>
										<option>January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
										</select>
									</div>
								</div>
							
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Amount</label>
                                    <div class="controls">
                                        <input type="text" name="amount" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Date</label>
                                    <div class="controls">
                                        <input type="date" name="pay_date" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                         	
								if (isset($_POST['submit'])) {
                                $stu_id = $_POST['stu_id'];
								$batch_id = $_POST['batch_id'];
								$year = $_POST['year'];
								$month = $_POST['month'];
                                $amount = $_POST['amount'];
								$pay_date = $_POST['pay_date'];
									
                                $addQuery = mysql_query("insert into payment (stu_id,batch_id,year,month,amount,pay_date,staff_id)
												values ('$stu_id','$batch_id','$year','$month','$amount','$pay_date','$get_id')                                    
														") or die(mysql_error());
							 //   header('location:payment_project.php');
							 if($addQuery){
								?>
								<div class="alert alert-info"><strong>Successfully Paid</strong></div>
								<?php
							}
								
                            }
                            ?>

                        </div>
                    </div>
                </div>
<?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>