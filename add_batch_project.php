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
                            <a href="batch_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                           
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                        <input type="text" name="batch_id" id="inputEmail" placeholder="Batch ID" required>
                                    </div>
                                </div>
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Subject ID</label>
									<div class="controls">
										<select name="sub_id" class="span3" >
										<option></option>
										<?php
										$query = mysql_query("select * from subject");
										while ($row = mysql_fetch_array($query)) {
											?>
										   <option><?php echo $row['sub_id']; ?></option>
											<?php
										}
										?>
										</select>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Grade</label>
									<div class="controls">
										<select name="grade" class="span3" >
										<option selected="selected"></option>
										<option>09</option>
										<option>10</option>
										<option>11</option>
										</select>
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
										   <option><?php echo $row['tutor_id'] ; ?></option>
											<?php
										}
										?>
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
                                $batch_id = $_POST['batch_id'];
                                $sub_id = $_POST['sub_id'];
								$grade = $_POST['grade'];
								$tutor_id = $_POST['tutor_id'];
                              
                                mysql_query("insert into batch (batch_id,sub_id,grade,tutor_id)
												values ('$batch_id','$sub_id','$grade','$tutor_id')                                    
														") or die(mysql_error());
                              //  header('location:batch_project.php');
								
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
