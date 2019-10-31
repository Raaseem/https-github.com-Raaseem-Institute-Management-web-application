<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); 
$get_id=$_SESSION['sid']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
							<a href="done_mcq_project.php" class="btn btn-success"><i class="icon icon-large"></i>&nbsp;Answers & Explanations</a>
                             
                            <br><br>
							
							<form class="form-horizontal" method="POST" action="do_mcq_project.php">
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;MCQ Tests Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
									
                                        <th>Batch ID</th>
										<th>Test No</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select DISTINCT test_no, mcq_question.batch_id from mcq_question,student,student_batch,batch where student.stu_id='$get_id' and 
															student_batch.stu_id=student.stu_id and student_batch.batch_id=batch.batch_id and mcq_question.batch_id=batch.batch_id") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $test_no = $row['test_no'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $test_no; ?>').tooltip('show')
                                            $('#e<?php echo $test_no; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $test_no; ?>').tooltip('show')
                                            $('#d<?php echo $test_no; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                  
	`									<td><?php echo $row['batch_id']; ?></td>										
                                        <td><?php echo $row['test_no']; ?></td> 
										<input name="batch_id" type="hidden" value="<?php echo $row['batch_id']; ?>">
										<input name="test_no" type="hidden" value="<?php echo $row['test_no']; ?>">
											
										<td width="100">
                                           <button type="submit" name="submit" class="btn btn-info"><i class="icon-success icon-large"></i>&nbsp;Do Test</button>
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