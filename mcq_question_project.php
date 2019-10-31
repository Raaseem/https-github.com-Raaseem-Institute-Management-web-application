<!DOCTYPE html>
<html>
<head>
</head>
<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['tid']; ?>
<?php  $gett_id=$_GET['id']; ?>
<?php $id_query=mysql_query("select * from mcq_question where batch_id='$gett_id' ORDER BY test_no DESC LIMIT 0,1")or die(mysql_error());
$row=mysql_fetch_array($id_query);
$test_no=$row['test_no'];
$id=$test_no+1;
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="batch_tutor_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
							<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="next_mcq_question_project.php">
                            
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                      <input type="text" name="batch_id" id="inputEmail" placeholder="" value="<?php echo $gett_id; ?>" required>
                                    </div>
                                </div>							
							
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Test No</label>
                                    <div class="controls">
                                      <input type="number" name="no" id="inputEmail" placeholder="" value="<?php echo $id; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Question ID</label>
                                    <div class="controls">
                                      <input type="number" name="que_id" id="inputEmail" placeholder="" value=1 required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Question</label>
                                    <div class="controls">
                                       <textarea type="number" size="500" name="question" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								
								<div class="control-group">
								<input name="option" type="radio" value="1" required="required">
                                    <label class="control-label" for="inputEmail">Option 1</label>
                                    <div class="controls">
                                        <textarea type="text" size="300" name="op1" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="2" required="required">
                                    <label class="control-label" for="inputEmail">Option 2</label>
                                    <div class="controls">
                                        <textarea type="text" size="300" name="op2" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="3" required="required">
                                    <label class="control-label" for="inputEmail">Option 3</label>
                                    <div class="controls">
                                       <textarea type="text" size="300" name="op3" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="4" required="required">
                                    <label class="control-label" for="inputEmail">option 4</label>
                                    <div class="controls">
                                       <textarea type="text" size="300" name="op4" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="5" required="required">
                                    <label class="control-label" for="inputEmail">Option 5</label>
                                    <div class="controls">
                                        <textarea type="text" size="300" name="op5" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Explanation</label>
                                    <div class="controls">
                                        <textarea type="text" size="500" name="explanation" id="inputEmail" placeholder="" ></textarea>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <div class="controls">
										<button type="submit" name="next" class="btn btn-info"><i class="icon-arrow-right icon-large"></i>&nbsp;Submit</button>								
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