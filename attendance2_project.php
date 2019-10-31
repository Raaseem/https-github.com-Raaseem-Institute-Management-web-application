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
		  <a href="attendance1_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>
            
            <form class="form-horizontal" method="POST" action="student_attendance_save_project.php">
            
			  <div class="control-group">
                <label class="control-label" for="inputEmail">Batch ID</label>
                <div class="controls">
                  <input type="text" name="batch_id" id="inputEmail" value="<?php echo $batch_id; ?>">
                </div>
              </div>
			  
              <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                  <tr>
                    <th>Student ID</th>
                    <th>Student Name</th>
                    <th>Present</th>
                  </tr>
                </thead>
				
                <tbody>
                	<?php
					if ($_POST['batch_id']) 
					{
						$batch_id = $_POST['batch_id'];
						//$dropdownval = $_POST['dropdownval'];
						//echo $dropdownval;
						
						$studInfo = mysql_query("SELECT student.stu_id, stu_fname, stu_lname FROM student,batch,student_batch 
							WHERE student.stu_id = student_batch.stu_id AND student_batch.batch_id=batch.batch_id AND batch.batch_id='$batch_id'") 						
						or die(mysql_error());
		
						while ($row = mysql_fetch_array($studInfo)) 
						{
						$stu_id = $row['stu_id'];
						$stu_fname = $row['stu_fname'];
						$stu_lname = $row['stu_lname'];
						?>
                            <tr class="odd gradeX">
                            <td><?php echo $stu_id; ?></td>
                            <td><?php echo $stu_fname. " " . $stu_lname; ?></td>
                            <td>
                                <div class="checkbox">
                               <input id="" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $stu_id; ?>" >
                                </div>
                          	</td>
                        	</tr>
                        <?php
						}
					}
					?>
                </tbody>
              </table>
			  
              <div class="control-group">
                <div class="controls">
					<input type="submit" name="btnsubmit" class="btn btn-info">
				</div>				  
              </div>
            </form>
                        
          </div>
        </div>
      </div>
      <?php include('footer_project.php'); ?>
    </div>
  </div>
</div>
</body>
</html>