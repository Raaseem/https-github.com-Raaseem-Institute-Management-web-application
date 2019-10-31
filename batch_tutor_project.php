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
							<!-- <a href="learning_materials_project.php" class="btn btn-success"><i class="icon icon-large"></i>&nbsp;MCQ Practice Exams</a> -->
							<a href="learning_materials2_project.php" class="btn btn-success"><i class="icon icon-large"></i>&nbsp;Learning Materials</a>
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
										<!-- <th>Add MCQ Exam</th> -->
										<th>Upload Learning Material</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from batch,subject,tutor where batch.sub_id=subject.sub_id and batch.tutor_id=tutor.tutor_id 
																	and tutor.tutor_id='$get_id'") or die(mysql_error());
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

                                        <!-- <td width="100">
                                            <a rel="tooltip"  title="Add MCQ" id="e<?php echo $batch_id; ?>" href="mcq_question_project.php<?php echo '?id='.$batch_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                                        </td> -->
										
										<td width="100">
                                            <a rel="tooltip"  title="Upload Learning Material" id="e<?php echo $batch_id; ?>" href="upload_project.php<?php echo '?id='.$batch_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
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