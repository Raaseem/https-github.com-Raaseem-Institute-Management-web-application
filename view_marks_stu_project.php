<?php include('header_project.php'); ?>
<?php// include('session_project.php'); ?> 
<?php error_reporting(E_ERROR); ?>

<?php  $get_id=$_GET['id'];
$gett_id=$_SESSION['sid']; ?>
<?php
//echo $get_id;
//echo $gett_id;

$class_test_query=mysql_query("select * from class_test where batch_id='$get_id' ")or die(mysql_error());
$row=mysql_fetch_array($class_test_query);
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
							<a href="batch_stu_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Class Test Marks Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                        
										<th>Year</th>
										<th>Month</th>
										<th>Batch ID</th>
										<th>Class Test No</th>
										<th>Marks</th>
							
                                    </tr>
                                </thead>
								
                                <tbody>
                                   
                                    <tr class="odd gradeX">
                                    
										<td><?php echo $row['year']; ?></td> 
										<td><?php echo $row['month']; ?></td> 
										<td><?php echo $row['batch_id']; ?></td>									
										<td><?php echo $row['class_test_no']; ?></td> 
										<td><?php echo $row['mark']; ?></td> 

                                    </tr>
                               
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