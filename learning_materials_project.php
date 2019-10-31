<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>
<?php  $get_id=$_SESSION['tid']; ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="batch_tutor_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                           <form class="form-horizontal" method="post" action="lm_project.php">
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Batch ID</label>
									<div class="controls">
										<select name="batch_id" class="span3" >
										<option></option>
										<?php
										$query = mysql_query("select batch_id from batch where tutor_id='$get_id'");
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
                                    <div class="controls">
                                        <button type="submit" name="save" class="btn btn-info"><i class="icon icon-large"></i>&nbsp;Select Test No</button>
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