<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['tid']; ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="tutor_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" action="feedback_tut2_project.php">
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                        <select name="batch_id" class="span2">
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select * from batch,tutor where batch.tutor_id=tutor.tutor_id and tutor.tutor_id='$get_id'");
                                            while ($row = mysql_fetch_array($query)) {
											$batch_id = $row['batch_id'];
                                                ?>
                                                <option><?php echo $row['batch_id']; ?></option>
												
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Year</label>
									<div class="controls">
										<select name="year" class="span2" >
										<option selected="selected"></option>
										<option>2007</option>
										<option>2008</option>
										<option>2009</option>
										<option>2010</option>
										<option>2011</option>
										<option>2012</option>
										<option>2013</option>
										<option>2014</option>
										<option>2015</option>
										<option>2016</option>
										<option>2017</option>
										<option>2018</option>
										<option>2019</option>
										<option>2020</option>	
										</select>
									</div>
								</div>
								
								<div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
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