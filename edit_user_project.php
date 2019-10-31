<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$user_query=mysql_query("select * from login where user_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($user_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="user_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
							
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">User ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="u_id" value="<?php echo $row['user_id']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Password</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="pw" value="<?php echo $row['password']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">First Name</label>
                                    <div class="controls">
                                        <input type="text" name="fn" id="inputPassword" value="<?php echo $row['fname']; ?>" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Last Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="ln" value="<?php echo $row['lname']; ?>" required>
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
                                $u_id = $_POST['u_id'];
								$pw = $_POST['pw'];
                                $fn = $_POST['fn'];
                                $ln = $_POST['ln'];
                               			
			
                                $updateQuery = mysql_query("update login set user_id='$u_id',password='$pw',fname='$fn',lname='$ln' where user_id='$get_id'
                                ")or die(mysql_error());
                                    
                                if($updateQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Updated</strong></div>
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
