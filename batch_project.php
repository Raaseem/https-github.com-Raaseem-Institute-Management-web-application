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
							<a href="teacher_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <a href="add_batch_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Batch</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Batches Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Batch ID</th>
										<th>Subject Name</th>
										<th>Grade</th>
										<th>Tutor Name</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from batch,subject,tutor where batch.sub_id=subject.sub_id and batch.tutor_id=tutor.tutor_id") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
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

                                    <tr class="odd gradeX">
                                   
                                        <td><?php echo $row['batch_id']; ?></td> 
                                        <td><?php echo $row['sub_name']; ?></td> 
										<td><?php echo $row['grade']; ?></td> 
										<td><?php echo $row['tut_fname'] . " " . $row['tut_lname'] ; ?></td> 

                                        <td width="100">
                                            <a rel="tooltip"  title="Delete Batch" id="d<?php echo $batch_id; ?>" href="#batch_id<?php echo $batch_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="Edit Batch" id="e<?php echo $batch_id; ?>" href="edit_batch_project.php<?php echo '?id='.$batch_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        </td>
                                        <!-- user delete modal -->
                                    <div id="batch_id<?php echo $batch_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Batch?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_batch_project.php<?php echo '?id=' .$batch_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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
