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
							<a href="staff_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <a href="add_tutor_attendance_stf_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Attendance</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Attendance Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Date</th>
										<th>Tutor ID</th>
										<th>Tutor Name</th>
										<th>Batch ID</th>
										<th>Status</th>
										<th>Action</th>
									
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from tutor_attendance") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $att_id = $row['att_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $att_id; ?>').tooltip('show')
                                            $('#e<?php echo $att_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $att_id; ?>').tooltip('show')
                                            $('#d<?php echo $att_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                  
                                        <td><?php echo $row['date']; ?></td> 
                                        <td><?php echo $row['tutor_id']; ?></td> 
										<td><?php echo $row['tutor_name']; ?></td> 
										<td><?php echo $row['batch_id']; ?></td> 
										<td><?php echo $row['status']; ?></td> 

                                        <td width="100">
                                            <a rel="tooltip"  title="Delete Attendance" id="d<?php echo $att_id; ?>" href="#attendance_id<?php echo $att_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="Edit Attendance" id="e<?php echo $att_id; ?>" href="edit_tutor_attendance_stf_project.php<?php echo '?id='.$att_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        </td>
										
                                        <!-- user delete modal -->
                                    <div id="attendance_id<?php echo $att_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Attendance?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_tutor_attendance_stf_project.php<?php echo '?id=' .$att_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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