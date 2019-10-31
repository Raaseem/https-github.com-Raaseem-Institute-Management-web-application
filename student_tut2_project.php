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
		  <a href="student_tut1_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>
            
			<form class="form-horizontal" method="POST" enctype="multipart/form-data">
			
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
					<th>First Name</th>
					<th>Last Name</th>
					<th>House No</th>
					<th>Street Name</th>
					<th>City</th>
					<th>Mobile No</th>
					<th>Land No</th>
					<th>Email ID</th>
					<th>DOB</th>
					<th>Registration Date</th>
					<th>Image</th>
					<th>View Parent Details</th>
                </tr>
             </thead>
				
                <tbody>
                	<?php
					if ($_POST['batch_id']) 
					{
						$batch_id = $_POST['batch_id'];
					 $query = mysql_query("select * from student,student_batch,batch where student.stu_id=student_batch.stu_id
																and student_batch.batch_id=batch.batch_id and batch.batch_id='$batch_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $parent_id = $row['parent_id'];
		
						?>
						
						<!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $batch_id; ?>').tooltip('show')
                                            $('#e<?php echo $batch_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
						
                           <tr class="odd gradeX">
                                       
                                        <td><?php echo $row['stu_id']; ?></td> 
                                        <td><?php echo $row['stu_fname']; ?></td>
										<td><?php echo $row['stu_lname']; ?></td>
										<td><?php echo $row['house_no']; ?></td>
										<td><?php echo $row['street_name']; ?></td> 
										<td><?php echo $row['city']; ?></td>
										<td><?php echo $row['mobile_no']; ?></td> 
										<td><?php echo $row['land_no']; ?></td> 
										<td><?php echo $row['email_id']; ?></td> 
										<td><?php echo $row['dob']; ?></td> 
										<td><?php echo $row['reg_date']; ?></td>
										<td width="40"><img class="img-rounded" src="<?php echo $row['location']; ?>" height="30" width="40"></td>
										
										<td width="100">                  
                                            <a rel="tooltip"  title="View Parent Detail" id="e<?php echo $parent_id; ?>" href="parent_tut_project.php<?php echo '?id='.$parent_id; ?>" class="btn btn-success"><i class="icon-ok icon-large"></i></a>
                                        </td>
										
							<tr>
                        <?php
						}
					}
					
					else{
					$query = mysql_query("select * from student,student_batch,batch,tutor where student.stu_id=student_batch.stu_id
																and student_batch.batch_id=batch.batch_id and batch.tutor_id=tutor.tutor_id and tutor.tutor_id='$get_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $parent_id = $row['parent_id'];
                                        ?>
										
										<!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $batch_id; ?>').tooltip('show')
                                            $('#e<?php echo $batch_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                       
                                        <td><?php echo $row['stu_id']; ?></td> 
                                        <td><?php echo $row['stu_fname']; ?></td>
										<td><?php echo $row['stu_lname']; ?></td>
										<td><?php echo $row['house_no']; ?></td>
										<td><?php echo $row['street_name']; ?></td> 
										<td><?php echo $row['city']; ?></td>
										<td><?php echo $row['mobile_no']; ?></td> 
										<td><?php echo $row['land_no']; ?></td> 
										<td><?php echo $row['email_id']; ?></td> 
										<td><?php echo $row['dob']; ?></td> 
										<td><?php echo $row['reg_date']; ?></td>
										<td width="40"><img class="img-rounded" src="<?php echo $row['location']; ?>" height="30" width="40"></td>
										
										<td width="100">                  
                                            <a rel="tooltip"  title="View Parent Detail" id="e<?php echo $parent_id; ?>" href="parent_tut_project.php<?php echo '?id='.$parent_id; ?>" class="btn btn-success"><i class="icon-ok icon-large"></i></a>
                                        </td>
										
                                    </tr>
                                <?php }
										}?>
				
                </tbody>
              </table>
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