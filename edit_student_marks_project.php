<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
 $get_id=$_GET['id'];
?>
<?php
$class_test_query=mysql_query("select * from class_test where class_test_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($class_test_query);
?>
<body>

<div class="row-fluid">
  <div class="span12">
    <?php include('navbar_project.php'); ?>
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <div class="hero-unit-3"> <a href="student_marks_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>
            
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" >
            
				<div class="control-group">
					<label class="control-label" for="inputEmail">Batch ID</label>
					<div class="controls">
						<input type="text" name="batch_id" id="inputEmail" value="<?php echo $row['batch_id']; ?>">
					</div>
				</div>
			  
				<div class="control-group">
					<label class="control-label" for="inputEmail">Year</label>
					<div class="controls">
						<select name="year" class="span3" value="<?php echo $row['year']; ?>">
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
							<select name="month" class="span3" value="<?php echo $row['month']; ?>">
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
                            <input type="text" name="test_no" id="inputEmail" placeholder="" value="<?php echo $row['class_test_no']; ?>"required>
                        </div>
                </div>
			  
				<div class="control-group">
                    <label class="control-label" for="inputEmail">Student ID</label>
                        <div class="controls">
                            <input type="text" name="stu_id" id="inputEmail" placeholder="" value="<?php echo $row['stu_id']; ?>"required>
							&nbsp;&nbsp;Marks
							<input type="text" name="mark" id="inputEmail" value="<?php echo $row['mark']; ?>">
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
                                					
               mysql_query("update class_test set stu_id='$stu_id',batch_id='$batch_id',year='$year',month='$month',class_test_no='$test_no',mark='$mark' where class_test_id='$get_id'
							")or die(mysql_error());
							
						//	 header('location:student_marks_project.php');
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