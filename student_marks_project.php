<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start() ?>
<?php $get_id=$_SESSION['tid']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <a href="marks1_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Class Test Marks</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Class Test Marks Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                        
										<th>Student ID</th>
										<th>Student Name</th>
										<th>Batch ID</th>
										<th>Year</th>
										<th>Month</th>
										<th>Class Test No</th>
										<th>Marks</th>
										<th>Action</th>
														
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from class_test,batch,student where class_test.batch_id=batch.batch_id and class_test.stu_id=student.stu_id and 
															batch.tutor_id='$get_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $class_test_id = $row['class_test_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $class_test_id; ?>').tooltip('show')
                                            $('#e<?php echo $class_test_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $class_test_id; ?>').tooltip('show')
                                            $('#d<?php echo $class_test_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                    
                                        <td><?php echo $row['stu_id']; ?></td> 
										<td><?php echo $row['stu_fname'] . " " . $row['stu_lname'] ; ?></td> 
										<td><?php echo $row['batch_id']; ?></td>									
										<td><?php echo $row['year']; ?></td> 
										<td><?php echo $row['month']; ?></td> 
										<td><?php echo $row['class_test_no']; ?></td> 
										<td><?php echo $row['mark']; ?></td> 

                                        <td width="100">
                                            <a rel="tooltip"  title="Delete Class_Test_Marks" id="d<?php echo $class_test_id; ?>" href="#class_test_id<?php echo $class_test_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="Edit Class_Test_Marks" id="e<?php echo $class_test_id; ?>" href="edit_student_marks_project.php<?php echo '?id='.$class_test_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        </td>
										
                                        <!-- user delete modal -->
                                    <div id="class_test_id<?php echo $class_test_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Class Test Marks?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_student_marks_project.php<?php echo '?id=' .$class_test_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                        </div>
                                    </div>
                                    <!-- end delete modal -->

                                    </tr>
                                <?php } ?>
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