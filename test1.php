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
                            <a href="event_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                          <form class="form-horizontal" method="POST" action="bar1.php">
                         
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Student ID</label>
                                    <div class="controls">
                                        <input type="text" name="student_id" id="inputEmail" placeholder="Event ID" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID1</label>
                                    <div class="controls">
                                        <input type="text" name="batch_id1" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID2</label>
                                    <div class="controls">
                                        <input type="text" name="batch_id2" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID3</label>
                                    <div class="controls">
                                        <input type="text" name="batch_id3" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Class Test No</label>
                                    <div class="controls">
                                        <input type="text" name="test_no" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
								
                            </form>

                        </div>
                    </div>
                </div>
<?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>