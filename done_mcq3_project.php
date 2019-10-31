<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['sid'];
?>

<?php

$batch_id = $_POST['batch_id'];
$gett_id = $_POST['test_no'];

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
                            <a href="done_mcq_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
							<form class="form-horizontal" method="POST" action="">
								
							<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                   
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Answers & Explanations</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
										<th>Question ID</th>
                                        <th>Question</th>
										<th>Option 1</th>
										<th>Option 2</th>
										<th>Option 3</th>
										<th>Option 4</th>
										<th>Option 5</th>
										<th>Correct Answer</th>
										<th>Explanation</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from mcq_question where test_no='$gett_id' and batch_id='$batch_id'") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                       $que_id = $row['que_id'];
                                        ?>

                                    <tr class="odd gradeX">
                                       
										<td><?php echo $row['que_id']; ?></td>
                                        <td><?php echo $row['question']; ?></td> 
                                        <td><?php echo $row['option1']; ?></td>
										<td><?php echo $row['option2']; ?></td>
										<td><?php echo $row['option3']; ?></td>
										<td><?php echo $row['option4']; ?></td>
										<td><?php echo $row['option5']; ?></td>
										<td><?php echo $row['correct_answer']; ?></td>
										<td><?php echo $row['explanation']; ?></td>
										
									<tr>
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