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
                            <a href="class_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
                           	
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Lecture Hall ID</label>
                                    <div class="controls">
                                        <input type="text" name="class_id" id="inputEmail" placeholder="Lecture Hall ID" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Lectue Hall Name</label>
                                    <div class="controls">
                                        <input type="text" name="class_name" id="inputEmail" placeholder="Lecture Hall Name" required>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Available Seats</label>
                                    <div class="controls">
                                        <input type="text" name="class_seats" id="inputEmail" placeholder="Available Seats" required>
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
                                $class_id = $_POST['class_id'];
                                $class_name = $_POST['class_name'];
                                $class_seats = $_POST['class_seats'];
                                
                                $updateQuery = mysql_query("insert into class (class_id,class_name,class_seats)
												values ('$class_id','$class_name','$class_seats')                                    
														") or die(mysql_error());
												                    
                                                        if($updateQuery){
                                                            ?>
                                                            <div class="alert alert-info"><strong>Successfully Added</strong></div>
                                                            <?php
                                                        }		
                             //   header('location:class_project.php');
								
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