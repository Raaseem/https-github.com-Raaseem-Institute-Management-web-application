<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); 
$get_id=$_SESSION['tid'];
?> 
<?php error_reporting(E_ERROR); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
						 <a href="message_tut_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
								 <form class="form-horizontal" method="POST" enctype="multipart/form-data">
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Receiver Type</label>
                                    <div class="controls">
                                        <select name="receiver_type" class="span2" >
										<option selected="selected"></option>
										<option>Admin</option>
										<option>Parent</option>
										<option>Student</option>
										<option>Tutor</option>
										<option>Staff</option>
										</select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Receiver ID</label>
                                    <div class="controls">
                                        <input type="text" name="receiver_id" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject</label>
                                    <div class="controls">
                                        <input type="text" name="subject" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Message</label>
                                    <div class="controls">
                                        <textarea type="text" size="100" name="description" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Send</button>
                                    </div>
                                </div>
                            </form>
							
							   <?php
                        								
								if (isset($_POST['submit'])) {
								$receiver_type = $_POST['receiver_type'];
                                $receiver_id = $_POST['receiver_id'];
								$subject = $_POST['subject'];
								$description = $_POST['description'];
								
								if($receiver_type="Parent"){
                             $sql =   mysql_query("insert into message_parent (receiver_id,sender_id,subject,description,mess_date)
												values ('$receiver_id','$get_id','$subject','$description',NOW())                                    
														") or die(mysql_error());
                              //  header('location:forum_project.php');
									}
							  
							  if($receiver_type="Admin"){
							$sql =   mysql_query("insert into message (receiver_id,sender_id,subject,description,mess_date)
												values ('$receiver_id','$get_id','$subject','$description',NOW())                                    
														") or die(mysql_error());
									}
									
							  if($receiver_type="Student"){
							$sql =  mysql_query("insert into message_student (receiver_id,sender_id,subject,description,mess_date)
												values ('$receiver_id','$get_id','$subject','$description',NOW())                                    
														") or die(mysql_error());
									}
									
							  if($receiver_type="Tutor"){
							$sql =  mysql_query("insert into message_tutor (receiver_id,sender_id,subject,description,mess_date)
												values ('$receiver_id','$get_id','$subject','$description',NOW())                                    
														") or die(mysql_error());
									}
									
							  if($receiver_type="Staff"){
							$sql =  mysql_query("insert into message_staff (receiver_id,sender_id,subject,description,mess_date)
												values ('$receiver_id','$get_id','$subject','$description',NOW())                                    
														") or die(mysql_error());
									}
								
								if($sql){
							echo "Message Sent";
							}
							else{
							echo "Message wasn't sent";
							}
								
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