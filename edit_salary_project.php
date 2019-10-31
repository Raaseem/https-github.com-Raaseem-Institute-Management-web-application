<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$salary_query=mysql_query("select * from salary_tutor where sal_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($salary_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="salary_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                      	 
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Amount</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="amount" value="<?php echo $row['amount']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Year</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="year" value="<?php echo $row['year']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Month</label>
                                    <div class="controls">
                                       <select name="month">
										 <option select="selected"><?php echo $row['month']; ?></option>
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
                                    <label class="control-label" for="inputEmail">Status</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="status" value="<?php echo $row['status']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Tutor ID</label>
                                    <div class="controls" >
                                       <select name="tutor_id" class="span3" >
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
                                    <div class="controls">

                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            
							</form>

                            <?php
                            if (isset($_POST['save'])) {
                               
                                $amount = $_POST['amount'];
								$year = $_POST['year'];
								$month = $_POST['month'];
								$status= $_POST['status'];
								$tutor_id = $_POST['tutor_id'];                          
			
                                $updateQuery = mysql_query("update salary_tutor set amount='$amount',year='$year',month='$month',status='$status',tutor_id='$tutor_id' where sal_id='$get_id'
			                                    ")or die(mysql_error());
                  
                                if($updateQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Updated</strong></div>
                                    <?php
                                }
                                // header('location:salary_project.php');
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