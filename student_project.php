<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <a href="add_student_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Student</a>
							<a href="enroll_project.php" class="btn btn-success"><i class="icon-book-sign icon-large"></i>&nbsp;Enrolments</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>
								
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
										<th>Parent ID</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from student") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $stu_id = $row['stu_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $stu_id; ?>').tooltip('show')
                                            $('#e<?php echo $stu_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $stu_id; ?>').tooltip('show')
                                            $('#d<?php echo $stu_id; ?>').tooltip('hide')
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
										<td><?php echo $row['parent_id']; ?>
										
                                        <td width="100">
                                        <a rel="tooltip"  title="Delete Student" id="d<?php echo $stu_id; ?>" href="#course_id<?php echo $stu_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <a rel="tooltip"  title="Edit Student" id="e<?php echo $stu_id; ?>" href="edit_student_project.php<?php echo '?id='.$stu_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                    </td>
									
                                    <!-- user delete modal -->
                                    <div id="course_id<?php echo $stu_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Student?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_student_project.php<?php echo '?id=' . $stu_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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


