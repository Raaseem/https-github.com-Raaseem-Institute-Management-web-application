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
                            <a href="add_subject_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Subject</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Subjects Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Subject ID</th>
										<th>Subject Name</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from subject") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $sub_id = $row['sub_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $sub_id; ?>').tooltip('show')
                                            $('#e<?php echo $sub_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $sub_id; ?>').tooltip('show')
                                            $('#d<?php echo $sub_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                   
                                        <td><?php echo $row['sub_id']; ?></td> 
                                        <td><?php echo $row['sub_name']; ?></td> 

                                        <td width="100">
                                            <a rel="tooltip"  title="Delete Subject" id="d<?php echo $sub_id; ?>" href="#subject_id<?php echo $sub_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="Edit Subject" id="e<?php echo $sub_id; ?>" href="edit_subject_project.php<?php echo '?id='.$sub_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        </td>
										
                                        <!-- user delete modal -->
										<div id="subject_id<?php echo $sub_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Subject?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_subject_project.php<?php echo '?id=' . $sub_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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
