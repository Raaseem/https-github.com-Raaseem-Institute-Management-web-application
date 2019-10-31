<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['tid']; 
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
		  	<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
		  <a href="marks1_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>
            
            <form class="form-horizontal" method="POST" >
            
				<div class="control-group">
					<label class="control-label" for="inputEmail">Batch ID</label>
					<div class="controls">
						<input type="text" name="batch_id" id="inputEmail" value="<?php echo $batch_id; ?>">
					</div>
				</div>
			  
				<div class="control-group">
					<label class="control-label" for="inputEmail">Year</label>
					<div class="controls">
						<select name="year" class="span3" >
							<option selected="selected"></option>
							<option>2007</option>
							<option>2008</option>
							<option>2009</option>
							<option>2010</option>
							<option>2011</option>
							<option>2012</option>
							<option>2013</option>
							<option>2014</option>
							<option>2015</option>
							<option>2016</option>
							<option>2017</option>
							<option>2018</option>
							<option>2019</option>
							<option>2020</option>	
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
                    <label class="control-label" for="inputEmail">Class Test No</label>
                        <div class="controls">
                            <input type="text" name="test_no" id="inputEmail" placeholder="" required>
                        </div>
                </div>
			  
				<div class="control-group">
                    <label class="control-label" for="inputEmail">Student ID</label> 
                            <div class="controls">
                                <select name="stu_id" class="span3">
                                    <option></option>
                                    <?php
											
                                    $query = mysql_query("select * from student_batch where student_batch.batch_id='$batch_id'");
                                    while ($row = mysql_fetch_array($query)) {
									$stu_id = $row['stu_id'];
                                    ?>
                                    <option><?php echo $row['stu_id']; ?></option>
												
                                    <?php
                                    }
                                    ?>
                                </select>
								&nbsp;&nbsp;Marks
									 <input type="text" name="mark" id="inputEmail" >
                            </div>
                </div>
			  
        
				<div class="control-group">
					<div class="controls">
						<input type="submit" name="submit" class="btn btn-info">
					</div>				  
				</div>
				
            </form>
			
			 <?php
			if (isset($_POST['submit']))
			{
				$stu_id = $_POST['stu_id'];
				$batch_id = $_POST['batch_id'];
				$year = $_POST['year'];
				$month = $_POST['month'];
				$test_no = $_POST['test_no'];
				$mark = $_POST['mark'];
                                					
              $sql =  mysql_query("insert into class_test (stu_id,batch_id,year,month,class_test_no,mark)
								values ('$stu_id','$batch_id','$year','$month','$test_no','$mark') ") or die(mysql_error());
								
								if($sql){
			echo "Marks Successfully Added";
			}
			else{
			echo "Marks Didn't Properly Added";
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