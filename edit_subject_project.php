<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$subject_query=mysql_query("select * from subject where sub_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($subject_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="subject_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                       
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="sub_id" value="<?php echo $row['sub_id']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="sub_name" value="<?php echo $row['sub_name']; ?>" required>
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
                                $sub_id = $_POST['sub_id'];
                                $sub_name = $_POST['sub_name'];
			
                                $updateQuery = mysql_query("update subject set sub_id='$sub_id',sub_name='$sub_name' where sub_id='$get_id'
                                ")or die(mysql_error());
                                if($updateQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Updated</strong></div>
                                    <?php
                                }
                              //  header('location:subject_project.php');
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


