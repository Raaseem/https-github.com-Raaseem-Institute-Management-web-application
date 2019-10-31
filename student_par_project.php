<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start() ?>
<?php $get_id=$_SESSION['pid']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="parent_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="parent_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
							<a href="view_all_payment_par_project.php" class="btn btn-success"><i class="icon icon-large"></i>&nbsp;View Payments</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Students Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                        
										<th>student ID</th>
										<th>Student Name</th>
										<th>House No</th>
										<th>Street Name</th>
										<th>City</th>
										<th>Mobile No</th>
										<th>Land No</th>
										<th>Email ID</th>
										<th>Date Of Birth</th>
										<th>Registration Date</th>
										<th>Image</th>
										<th>View Batches</th>
							
                                    </tr>
                                </thead>
								
                                <tbody>
								
								<?php
								$student_query=mysql_query("select * from parent,student where student.parent_id=parent.parent_id and parent.parent_id='$get_id' 
													")or die(mysql_error());
								while ($row=mysql_fetch_array($student_query)){;
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
                                   
                                    <tr class="odd gradeX">
                                    
										<td><?php echo $row['stu_id']; ?></td>									
										<td><?php echo $row['stu_fname'] . " " . $row['stu_lname']; ?></td> 
										<td><?php echo $row['house_no']; ?></td> 
										<td><?php echo $row['street_name']; ?></td> 
										<td><?php echo $row['city']; ?></td> 
										<td><?php echo $row['mobile_no']; ?></td> 
										<td><?php echo $row['land_no']; ?></td> 
										<td><?php echo $row['email_id']; ?></td> 
										<td><?php echo $row['dob']; ?></td> 
										<td><?php echo $row['reg_date']; ?></td> 
										<td width="40"><img class="img-rounded" src="<?php echo $row['location']; ?>" height="30" width="40"></td> 
										
										<td>
											<a rel="tooltip"  title="View batches" id="e<?php echo $stu_id; ?>" href="view_batches_par_project.php<?php echo '?id='.$stu_id; ?>" class="btn btn-success"><i class="icon-ok icon-large"></i></a>
										</td>
									

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