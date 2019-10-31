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
                            <a href="event_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" enctype="multipart/form-data">
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Title</label>
                                    <div class="controls">
                                        <input type="text" name="title" id="inputEmail" placeholder="Title" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Event Date</label>
                                    <div class="controls">
                                        <input type="date" name="event_date" id="inputEmail" placeholder="mm/dd/yyyy" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Time</label>
                                    <div class="controls">
                                        <input type="time" name="time" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Location</label>
                                    <div class="controls">
                                        <input type="text" name="location" id="inputEmail" placeholder="Location" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Description</label>
                                    <div class="controls">
                                        <textarea type="text" size="100" name="description" id="inputEmail" placeholder="" required></textarea>
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
                                $title = $_POST['title'];
                                $event_date = $_POST['event_date'];
								$time = $_POST['time'];
								$location = $_POST['location'];
								$description = $_POST['description'];
                                
                               $sql =  mysql_query("insert into event (title,event_date,time,location,description)
												values ('$title','$event_date','$time','$location','$description')                                    
														") or die(mysql_error());
								
								if($sql){
                                    ?>
                                    <div class="alert alert-info"><strong>Event successfully added</strong></div>
                                    <?php
								}
								else{
                                    ?>
                                    <div class="alert alert-info"><strong>There may be a mistake, sorry couldn't add the event</strong></div>
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