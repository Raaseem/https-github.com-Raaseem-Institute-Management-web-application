<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); 
$get_id=$_SESSION['tid']; ?>

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
							
                            <br><br>
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Topics Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
									
                                        <th>Question ID</th>
                                        <th>Batch ID</th>								
										<th>Topic</th>
										<th>Views</th>
										<th>Reply</th>
										<th>Date/Time</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from forum_question,batch,tutor where tutor.tutor_id='$get_id' and 
															batch.tutor_id=tutor.tutor_id and forum_question.batch_id=batch.batch_id ") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $ques_id = $row['ques_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $ques_id; ?>').tooltip('show')
                                            $('#e<?php echo $ques_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $ques_id; ?>').tooltip('show')
                                            $('#d<?php echo $ques_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                  
                                        <td><?php echo $row['ques_id']; ?></td>
	`									<td><?php echo $row['batch_id']; ?></td>										
                                        <td><?php echo $row['topic']; ?></td> 
										<td><?php echo $row['view']; ?></td> 
										<td><?php echo $row['reply']; ?></td> 
										<td><?php echo $row['datetime']; ?></td> 

                                       <td width="100">
                                            <a rel="tooltip"  title="View Topic" id="e<?php echo $ques_id; ?>" href="view_forum_tut_project.php<?php echo '?id='.$ques_id; ?>" class="btn btn-success"><i class="icon-info-sign icon-large"></i></a>
                                        </td>
                                       
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