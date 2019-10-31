<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start() ?>
<?php  $get_id=$_GET['id']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="parent_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="student_par_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Batches Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                        
										<th>Batch ID</th>
										<th>Tutor Name</th>
										<th>View Class Test Marks</th>
										<th>View Payments</th>
										<!-- <th>View Attendance</th> -->
										
                                    </tr>
                                </thead>
								
                                <tbody>
								
								<?php
								$student_query=mysql_query("select * from student,batch,student_batch,tutor where tutor.tutor_id=batch.tutor_id and 
								batch.batch_id=student_batch.batch_id and student_batch.stu_id=student.stu_id and student.stu_id='$get_id'")or die(mysql_error());
								while ($row=mysql_fetch_array($student_query)){;
								$batch_id = $row['batch_id'];
								?>
								
								<!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $batch_id; ?>').tooltip('show')
                                            $('#e<?php echo $batch_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
									<!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $batch_id; ?>').tooltip('show')
                                            $('#d<?php echo $batch_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
									<!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#f<?php echo $batch_id; ?>').tooltip('show')
                                            $('#f<?php echo $batch_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
								
                                    <tr class="odd gradeX">
                                    
										<td><?php echo $row['batch_id']; ?></td>									
										<td><?php echo $row['tut_fname'] . " " . $row['tut_lname']; ?></td> 
										
										<td>
											<a rel="tooltip"  title="View Class Test Marks" id="e<?php echo $batch_id; ?>" href="view_marks_par_project.php<?php echo '?id='.$batch_id; ?>" class="btn btn-success"><i class="icon-ok icon-large"></i></a>
										</td>
										
										<td>
											<a rel="tooltip"  title="View Payments" id="d<?php echo $batch_id; ?>" href="view_payment_par_project.php<?php echo '?id='.$batch_id; ?>" class="btn btn-success"><i class="icon-ok icon-large"></i></a>
										</td>
										
										<!-- <td>
											<a rel="tooltip"  title="View Attendance" id="f<?php echo $batch_id; ?>" href="view_stut_attendance_par_project.php<?php echo '?id='.$batch_id; ?>" class="btn btn-success"><i class="icon-ok icon-large"></i></a>
										</td> -->

                                    </tr>
									
									<?php
									}
									?>
                               
                                </tbody>
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