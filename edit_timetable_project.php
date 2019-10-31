<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$timetable_query=mysql_query("select * from timetable where tt_id='$get_id'")or die(mysql_error());
$row2=mysql_fetch_array($timetable_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="timetable_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
							
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Lecture Hall ID</label>
                                    <div class="controls">
                                         <select name="class_id" class="span3" required>
                                            <option> <?php echo $row2['class_id']; ?> </option>
                                            <?php
                                            $query = mysql_query("select * from class");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['class_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Batch ID</label>
                                    <div class="controls">
                                         <select name="batch_id" class="span3" required>
                                            <option> <?php echo $row2['batch_id']; ?> </option>
                                            <?php
                                            $query = mysql_query("select * from batch");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['batch_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Timeslot</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From <input type="time" name="fromTime" style="width:100px;" required>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To <input type="time" name="toTime" style="width:100px;" required>

                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Day</label>
                                    <div class="controls">
                                         <select name="day" required>
										 <option> <?php echo $row2['day']; ?> </option>
										<option>Sunday</option>
										<option>Monday</option>
										<option>Tuesday</option>
										<option>Wednesday</option>
										<option>Thursday</option>
										<option>Friday</option>
										<option>Saturday</option>
										</select>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>

                                
                            
							</form>

                            <?php
                            function saveAlert(){
                                ?>
                                        <div class="modal-body">
                                            <div class="alert alert-info"><strong>Successfully Updated</strong></div>
                                        </div>
                                
                                <?php
                            }

                            if (isset($_POST['save'])) {
                                
                                $class_id = $_POST['class_id'];
                                $batch_id = $_POST['batch_id'];
                                $fromTime = $_POST['fromTime'];
                                $toTime = $_POST['toTime'];
                                $day = $_POST['day'];                              			
			
						$updateQuery=mysql_query("update timetable set class_id='$class_id',batch_id='$batch_id',fromTime='$fromTime',toTime='$toTime',day='$day' where tt_id='$get_id'
                                        ")or die(mysql_error());
                            //    header('location:timetable_project.php');
                            if($updateQuery){
                               ?>
                                <div class="alert alert-info"><strong>Successfully Updated</strong></div>
                               <?php
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