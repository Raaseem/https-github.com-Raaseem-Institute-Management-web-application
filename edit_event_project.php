<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$event_query=mysql_query("select * from event where event_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($event_query);
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
                            <a href="event_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                       
								 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Event Title</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="title" value="<?php echo $row['title']; ?>" required>
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Event Date</label>
                                    <div class="controls">
                                        <input type="date" id="inputEmail" name="event_date" value="<?php echo $row['event_date']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Time</label>
                                    <div class="controls">
                                        <input type="time" id="inputEmail" name="time" value="<?php echo $row['time']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Location</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="location" value="<?php echo $row['location']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Description</label>
                                    <div class="controls">
                                        <textarea type="text" size="100" name="description" value="<?php echo $row['description']; ?>" required></textarea>
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
                                $title = $_POST['title'];
                                $event_date = $_POST['event_date'];
								$time = $_POST['time'];
								$location = $_POST['location'];
								$description = $_POST['description'];
                           
			
							$sql = mysql_query("update event set title='$title',event_date='$event_date',time='$time',location='$location',description='$description' 
							where event_id='$get_id'")or die(mysql_error());
			
							if($sql){
                            ?>
                                    <div class="alert alert-info"><strong>Successfully updated the event</strong></div>
                                    <?php
							}
							else{
                                ?>
                                    <div class="alert alert-info"><strong>There may be a mistake, sorry couldn't update the event</strong></div>
                                    <?php
							}

                                //header('location:event_project.php');
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