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
                                         <select name="class_id" class="span3" >
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
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Timeslot</label>
                                    <div class="controls">
										<select name="timeslot">
                                        <option selected="selected"></option>
										<option>7.30am - 8.30am</option>
										<option>8.30am - 9.30 am</option>
										<option>9.30am - 10.30 am</option>
										<option>10.30 am - 11.30am</option>
										<option>11.30am - 12.30pm</option>
										<option>12.30pm - 1.30pm</option>
										<option>1.30pm - 2.30pm</option>
										<option>2.30pm - 3.30pm</option>
										<option>3.30pm - 4.30pm</option>
										<option>4.30pm - 5.30pm</option>
										</select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Day</label>
                                    <div class="controls">
                                         <select name="day">
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
								$timeslot = $_POST['timeslot'];
								$day = $_POST['day'];
								
                               if()
                               {
                               	
                               }else{
                                	  mysql_query("insert into timetable (class_id,batch_id,timeslot,day)
									  values ('$class_id','$batch_id','$timeslot','$day')                                    
														") or die(mysql_error());
                              //  header('location:timetable_project.php');
								
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