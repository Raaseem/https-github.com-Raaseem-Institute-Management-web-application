<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); 
$get_id=$_SESSION['sid'];?>
<?php
$batch_id = $_POST['batch_id']; ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="done_mcq_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" action="done_mcq3_project.php">
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Test No</label>
									<div class="controls">
										<select name="test_no" class="span3" >
										<option></option>
										<?php
										$query = mysql_query("select distinct test_no from mcq_answer where batch_id='$batch_id' and stu_id='$get_id'");
										while ($row = mysql_fetch_array($query)) {
											?>
										   <option><?php echo $row['test_no']; ?></option>
											<?php
										}
										?>
										</select>
									</div>
								</div>
								
								<div class="control-group">
								<div class="controls">
								<input name="batch_id" type="hidden" value="<?php echo $batch_id; ?>">
								</div>
								</div>
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="save" class="btn btn-info"><i class="icon icon-large"></i>&nbsp;See Test</button>
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