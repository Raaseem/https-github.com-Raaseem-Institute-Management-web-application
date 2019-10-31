<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); 
$get_id=$_SESSION['sid'];
error_reporting(E_ERROR);
?>

<body>

     <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
						 <a href="student_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>

								<?php
								$batch_id = $_POST['batch_id'];
								$year = $_POST['year'];
								$performance = $_POST['performance'];
								$rating1 = $_POST['rating1'];
								$rating2 = $_POST['rating2'];
								$rating3 = $_POST['rating3'];
								$rating4 = $_POST['rating4'];
								$rating5 = $_POST['rating5'];
								$rating6 = $_POST['rating6'];
								$rating7 = $_POST['rating7'];
								$rating8 = $_POST['rating8'];
								$rating9 = $_POST['rating9'];
								$rating10 = $_POST['rating10'];
								
								$query = mysql_query("select stu_id from feedback where stu_id='$get_id' and batch_id='$batch_id'");
								 while ($row = mysql_fetch_array($query)){
								$stu_id= $row['stu_id'];
								}
								if($stu_id==$get_id){
								echo "Sorry, You Have Already Submitted The FeedBack!!!";
								}
								
								else{
								mysql_query("insert into feedback (batch_id,stu_id,year,performance,rating1,rating2,rating3,rating4,rating5,rating6,rating7,rating8,
								rating9,rating10)
												values ('$batch_id', '$get_id','$year', '$performance','$rating1','$rating2','$rating3','$rating4','$rating5','$rating6','$rating7','$rating8',
												'$rating9','$rating10') ") or die(mysql_error());
												
								echo "Successfully Submitted The Feedback!!!";
								}
												  
                            ?>
							
						</div>
                    </div>
                </div>
                <?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>