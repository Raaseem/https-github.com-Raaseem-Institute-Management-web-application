<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php $get_id=$_SESSION['sid']; ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
                            <a href="event_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" action="bar1.php">
                         
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Student ID</label>
                                    <div class="controls">
                                        <input type="text" name="student_id" id="inputEmail" value="<?php echo $get_id;?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID1</label>
                                    <div class="controls">
                                       <select name="batch_id1" class="span2" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select batch_id from student_batch where stu_id='$get_id'");
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
                                    <label class="control-label" for="inputEmail">Batch ID2</label>
                                    <div class="controls">
                                       <select name="batch_id2" class="span2" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select batch_id from student_batch where stu_id='$get_id'");
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
                                    <label class="control-label" for="inputEmail">Batch ID3</label>
                                    <div class="controls">
                                       <select name="batch_id3" class="span2" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select batch_id from student_batch where stu_id='$get_id'");
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
									<label class="control-label" for="inputEmail">Class Test No</label>
									<div class="controls">
										<select name="test_no" class="span3" >
										<option selected="selected"></option>
										<option>1</option>
										<option>2</option>
										</select>
									</div>
								</div>
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Month</label>
									<div class="controls">
										<select name="month" class="span3" >
										<option selected="selected"></option>
										<option>January</option>
										<option>February</option>
										<option>March</option>
										<option>April</option>
										<option>May</option>
										<option>June</option>
										<option>July</option>
										<option>August</option>
										<option>September</option>
										<option>October</option>
										<option>November</option>
										<option>December</option>
										</select>
									</div>
								</div>
								
                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Generate</button>
                                    </div>
                                </div>
								
                            </form>

                        </div>
                    </div>
                </div>
<?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>