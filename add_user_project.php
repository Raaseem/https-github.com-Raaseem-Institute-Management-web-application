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
                            <a href="user_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" enctype="multipart/form-data">
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">User Name</label>
                                    <div class="controls">
                                        <input type="text" name="un" id="inputEmail" placeholder="User ID" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Password</label>
                                    <div class="controls">
                                        <input type="text" name="pw" id="inputEmail" placeholder="Password" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">First Name</label>
                                    <div class="controls">
                                        <input type="text" name="fn" id="inputEmail" placeholder="First Name" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name</label>
                                    <div class="controls">
                                        <input type="text" name="ln" id="inputEmail" placeholder="Last Name" required>
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
                                $un = $_POST['un'];
                                $pw = $_POST['pw'];
								$fn = $_POST['fn'];
								$ln = $_POST['ln'];
								
                                $addQuery = mysql_query("insert into login (user_id,password,fname,lname)
												values ('$un','$pw','$fn','$ln')                                    
                                                        ") or die(mysql_error());
                                if($addQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Added</strong></div>
                                    <?php
                                }
                                // header('location:user_project.php');
								
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
