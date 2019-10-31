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
                            <a href="salary_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" enctype="multipart/form-data">
						  
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
                                    <label class="control-label" for="inputEmail">Year</label>
                                    <div class="controls">
                                        <input type="text" name="year" id="inputEmail" placeholder="yyyy" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Month</label>
                                    <div class="controls">
                                       <select name="month">
										 <option select="selected"></option>
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
                                    <label class="control-label" for="inputEmail">Amount</label>
                                    <div class="controls">
                                        <input type="text" name="amount" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
																
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Status</label>
                                    <div class="controls">
                                        <input type="text" name="status" id="inputEmail" placeholder="" required>
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
                                $amount = $_POST['amount'];
								$year = $_POST['year'];
								$month = $_POST['month'];
								$status = $_POST['status'];
								$tutor_id = $_POST['tutor_id'];
								
                                $addQuery = mysql_query("insert into salary_tutor (amount,year,month,status,tutor_id)
												values ('$amount','$year','$month','$status','$tutor_id')                                    
                                                        ") or die(mysql_error());
                                                                          
                                if($addQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Added</strong></div>
                                    <?php
                                }
                              //  header('location:salary_project.php');
								
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