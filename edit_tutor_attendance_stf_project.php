<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$tutor_attendance_query=mysql_query("select * from tutor_attendance where att_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($tutor_attendance_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="tutor_attendance_stf_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                       
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Date</label>
                                    <div class="controls">
                                        <input type="date" id="inputEmail" name="date" value="<?php echo $row['date']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Tutor ID</label>
                                    <div class="controls">
                                        <select name="tutor_id" class="span3" required>
                                            <option><?php echo $row['tutor_id']; ?></option>
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
                                            <option><?php echo $row['tutor_name']?></option>
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
                                        <select name="sub_id" class="span3">
                                            <option><?php echo $row['batch_id']?></option>
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
                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            
							</form>

                            <?php
                            if (isset($_POST['save'])) {
								$date = $_POST['date'];
                                $tutor_id = $_POST['tutor_id'];
                                $tutor_name = $_POST['tutor_name'];
								$batch_id = $_POST['batch_id'];
								$attendance = $_POST['attendance'];
                           
			
			
			mysql_query("update tutor_attendance set date='$date',tutor_id='$tutor_id',tutor_name='$tutor_name',batch_id='$batch_id',status='$attendance' where att_id='$get_id'
			")or die(mysql_error());

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