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
                            <a href="tutor_attendance_stf_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                           	
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Date</label>
                                    <div class="controls">
                                        <input type="date" name="date" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Tutor ID</label>
                                    <div class="controls">
                                      <select name="tutor_id" class="span3" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select * from tutor");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['tutor_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Tutor Name</label>
                                    <div class="controls">
                                      <select name="tutor_name" class="span3" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select * from tutor");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['tut_fname'] . " " . $row['tut_lname']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                        <select name="batch_id" class="span3">
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
                                    <label class="control-label" for="inputEmail">Status</label>
                                    <div class="controls">
										 <select name="attendance">
										<option select="selected">Present</option>
										<option>Absent</option>
										</select>
									 <!--  <input type="text" name="status" id="inputEmail" placeholder="" required> -->
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
								$date = $_POST['date'];
                                $tutor_id = $_POST['tutor_id'];
                                $tutor_name = $_POST['tutor_name'];
								$batch_id = $_POST['batch_id'];
								$attendance = $_POST['attendance'];
                                
                                mysql_query("insert into tutor_attendance (date,tutor_id,tutor_name,batch_id,status)
												values ('$date','$tutor_id','$tutor_name','$batch_id','$attendance')                                    
														") or die(mysql_error());
                                header('location:tutor_attendance_project.php');
								
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