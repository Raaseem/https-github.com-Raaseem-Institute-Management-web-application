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
                            <a href="subject_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                           
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject ID</label>
                                    <div class="controls">
                                        <input type="text" name="sub_id" id="inputEmail" placeholder="Subject ID" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Subject Name</label>
                                    <div class="controls">
                                        <input type="text" name="sub_name" id="inputEmail" placeholder="Subject Name" required>
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
                                $sub_id = $_POST['sub_id'];
                                $sub_name = $_POST['sub_name'];
                              
                                $updateQuery = mysql_query("insert into subject (sub_id,sub_name)
												values ('$sub_id','$sub_name')                                    
                                                        ") or die(mysql_error());
                                                                            
                                if($updateQuery){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully Added</strong></div>
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

