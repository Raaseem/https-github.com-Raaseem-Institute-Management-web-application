<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php error_reporting(E_ERROR); ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="tutor_tut_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                           
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Old Password</label>
                                    <div class="controls">
                                        <input type="text" name="old" id="inputEmail" placeholder="Old Password" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">New Password</label>
                                    <div class="controls">
                                        <input type="text" name="new" id="inputEmail" placeholder="New Password" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Confirm New Password</label>
                                    <div class="controls">
                                        <input type="text" name="con" id="inputEmail" placeholder="New Password" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                         
								if(isset($_POST['submit']))
								{
								$old = $_POST ['old'];
								$new = $_POST ['new'];
								$con = $_POST ['con'];

								$sql = mysql_query("SELECT * FROM tutor WHERE password = '$old'") or die (mysql_error());
								
								if ($sql)
								{
									$row = mysql_fetch_array($sql);
									extract ($row);

								if ($old <> $password) {
								echo "Your old password doesn't match";
								}

								else

								if ($new == $con){
								$update = mysql_query("UPDATE tutor SET  password = '$new' WHERE password = '$old' ") or die (mysql_error());
								
								if($update){
								echo "Successfully changed password"; 
								}
								}

								else { 
								echo "Passwords don't match";
								}
								}
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
