<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>
<?php $batch_id = $_POST['batch_id'];
$test_no = $_POST['test_no']; ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="learning_materials_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;MCQ Questions</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Question</th>
										<th>Option 1</th>
										<th>Option 2</th>
										<th>Option 3</th>
										<th>Option 4</th>
										<th>Option 5</th>
										<th>Correct Answer</th>
										<th>Explanation</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from mcq_question where batch_id='$batch_id' and test_no='$test_no'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $que_id = $row['que_id'];
                                        ?>

                                        <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#e<?php echo $que_id; ?>').tooltip('show')
                                            $('#e<?php echo $que_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
									
                                    <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                
                                            $('#d<?php echo $que_id; ?>').tooltip('show')
                                            $('#d<?php echo $que_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->

                                    <tr class="odd gradeX">
                                       
                                        <td><?php echo $row['question']; ?></td> 
                                        <td><?php echo $row['option1']; ?></td>
										<td><?php echo $row['option2']; ?></td>
										<td><?php echo $row['option3']; ?></td>
										<td><?php echo $row['option4']; ?></td>
										<td><?php echo $row['option5']; ?></td>
										<td><?php echo $row['correct_answer']; ?></td>
										<td><?php echo $row['explanation']; ?></td>
										
                                       <td width="100">
                                            <a rel="tooltip"  title="Delete Question" id="d<?php echo $que_id; ?>" href="#que_id<?php echo $que_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        </td>
                                        <!-- user delete modal -->
                                    <div id="que_id<?php echo $que_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Question?</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                            <a href="delete_mcq_question_project.php<?php echo '?id=' .$que_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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