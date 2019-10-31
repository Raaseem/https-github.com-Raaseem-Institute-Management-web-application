<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							 <a href="admin_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <a href="add_admin_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Admin</a>
                            <br><br>
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Admins Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                        
                                        <th>Admin ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>House No</th>
										<th>Street Name</th>
										<th>City</th>
										<th>Mobile No</th>
										<th>Land No</th>
										<th>Email ID</th>
										<th>Image</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from admin") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $admin_id = $row['admin_id'];
                                        ?>


                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $admin_id; ?>').tooltip('show')
                                            $('#e<?php echo $admin_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $admin_id; ?>').tooltip('show')
                                            $('#d<?php echo $admin_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->


                                    <tr class="odd gradeX">
                                       
                                        <td><?php echo $row['admin_id']; ?></td> 
                                        <td><?php echo $row['adm_fname']; ?></td>
										<td><?php echo $row['adm_lname']; ?></td>
										<td><?php echo $row['house_no']; ?></td>
										<td><?php echo $row['street_name']; ?></td> 
										<td><?php echo $row['city']; ?></td>
										<td><?php echo $row['mobile_no']; ?></td> 
										<td><?php echo $row['land_no']; ?></td> 
										<td><?php echo $row['email_id']; ?></td> 
										<td width="40"><img class="img-rounded" src="<?php echo $row['location']; ?>" height="30" width="40"></td>
										
										

                                        <td width="100">
                                            <a rel="tooltip"  title="Delete Admin" id="d<?php echo $admin_id; ?>" href="#admin_id<?php echo $admin_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="Edit Admin" id="e<?php echo $admin_id; ?>" href="edit_admin_project.php<?php echo '?id='.$admin_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        </td>
                                        <!-- user delete modal -->
                                    <div id="admin_id<?php echo $admin_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Admin?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_admin_project.php<?php echo '?id=' . $admin_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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