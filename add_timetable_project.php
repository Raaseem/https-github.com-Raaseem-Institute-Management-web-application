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
                            <a href="timetable_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                           	
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Lecture Hall ID</label>
                                    <div class="controls">
                                         <select name="class_id" class="span3" required>
                                            <option></option>
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
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                         <select name="batch_id" class="span3" required>
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
										 <option select="selected"></option>
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

                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>

                          <?php

                            if (isset($_POST['submit'])) {

                                $class_id = $_POST['class_id'];
                                $batch_id = $_POST['batch_id'];
                                $fromTime = $_POST['fromTime'];
                                $toTime = $_POST['toTime'];
                                $day = $_POST['day'];

                                $qcount = mysql_query(" SELECT COUNT(*) FROM timetable WHERE '$fromTime' >= fromTime AND '$fromTime' < toTime AND day LIKE '$day' AND class_id LIKE '$class_id' ");
                                $qresult = mysql_result($qcount,0);
                                if($qresult == 0)
                                {
                                    mysql_query("insert into timetable (class_id,batch_id,fromTime,toTime,day)
                                                    values ('$class_id','$batch_id','$fromTime','$toTime','$day')                                    
                                            ") or die(mysql_error());

                                            ?>
                                                    <div class="alert alert-info"><strong>Successfully Added</strong></div>
                                            <?php
                                    
                                }else{
                                    ?>
                                        <div class="alert alert-danger"><strong>Rejected! This class room is occupied. Please refer the time table</strong></div>
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