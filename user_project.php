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
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <a href="add_user_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add User</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Users Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>User Name</th>
										<th>Password</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from login") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $user_id = $row['user_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $user_id; ?>').tooltip('show')
                                            $('#e<?php echo $user_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $user_id; ?>').tooltip('show')
                                            $('#d<?php echo $user_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                     
                                        <td><?php echo $row['user_id']; ?></td> 
                                        <td><?php echo $row['password']; ?></td> 
										<td><?php echo $row['fname']; ?></td> 
										<td><?php echo $row['lname']; ?></td> 

										<td width="100">
										<a rel="tooltip"  title="Delete User" id="d<?php echo $user_id; ?>" href="#userdel<?php echo $user_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                                <a rel="tooltip"  title="Edit User" id="e<?php echo $user_id; ?>" href="edit_user_project.php<?php echo '?id='.$user_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                            </td>
										
                                        <!-- user delete modal -->
								
									<div id="userdel<?php echo $user_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp;<?php echo $row['fname'] . "  " . $row['lname']; ?>?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_user_project.php<?php echo '?id=' . $user_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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
