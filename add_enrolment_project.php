<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="enroll_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                           
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Student ID</label>
                                    <div class="controls">
                                       <select name="stu_id" class="span3" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select * from student");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['stu_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                       <select name="batch_id" class="span3" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select * from batch");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['batch_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
										 <a href="add_enrolment_timetable_project.php" class="btn btn-success"><i class="icon-book icon-large"></i>&nbsp;Batch Details</a>
                                    </div>
                                </div>
							
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                         
								if (isset($_POST['submit'])) {
                                $stu_id = $_POST['stu_id'];
                                $batch_id = $_POST['batch_id'];
                              
                                mysql_query("insert into student_batch (stu_id,batch_id)
												values ('$stu_id','$batch_id')                                 
														") or die(mysql_error());
                              //  header('location:enroll_project.php');
								
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
