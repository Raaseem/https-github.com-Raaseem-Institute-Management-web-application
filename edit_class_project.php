<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$class_query=mysql_query("select * from class where class_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($class_query);
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
                            <a href="class_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                       
								 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Lecture Hall ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="class_id" value="<?php echo $row['class_id']; ?>" required>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Lecture Hall Name</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="class_name" value="<?php echo $row['class_name']; ?>" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Available Seats</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="class_seats" value="<?php echo $row['class_seats']; ?>" required>
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
                                $class_id = $_POST['class_id'];
                                $class_name = $_POST['class_name'];			
                                $class_seats = $_POST['class_seats'];			
                                
                                $updateQuery = mysql_query("update class set class_id='$class_id',class_name='$class_name',class_seats='$class_seats' where class_id='$get_id'
											")or die(mysql_error());
                                                        
                                if($updateQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Updated</strong></div>
                                    <?php
                                }
                              //  header('location:class_project.php');
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