<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); 
$get_id=$_SESSION['sid'];
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
							<a href="sent_message_stu_project.php" class="btn btn-success"><i class="icon-book-sign icon-large"></i>&nbsp;Sent</a>
                            <a href="send_message_stu_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Send Message</a>							
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Inbox</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Message ID</th>
										<th>Sender</th>
										<th>Date</th>
										<th>Subject</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from message_student where receiver_id='$get_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $mess_id = $row['mess_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $mess_id; ?>').tooltip('show')
                                            $('#e<?php echo $mess_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $mess_id; ?>').tooltip('show')
                                            $('#d<?php echo $mess_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                   
                                        <td><?php echo $row['mess_id']; ?></td> 
                                        <td><?php echo $row['sender_id']; ?></td> 
										<td><?php echo $row['mess_date']; ?></td> 
										<td><?php echo $row['subject']; ?></td> 

                                        <td width="100">
                                            <a rel="tooltip"  title="Delete Message" id="d<?php echo $mess_id; ?>" href="#message_id<?php echo $mess_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                            <a rel="tooltip"  title="View Message" id="e<?php echo $mess_id; ?>" href="view_message_stu_project.php<?php echo '?id='.$mess_id; ?>" class="btn btn-success"><i class="icon-info-sign icon-large"></i></a>
                                        </td>
										
                                        <!-- user delete modal -->
										<div id="message_id<?php echo $mess_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Message?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_message_stu_project.php<?php echo '?id=' . $mess_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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
