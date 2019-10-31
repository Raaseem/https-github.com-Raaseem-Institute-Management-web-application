<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['tid']; ?>
<?php  $gett_id=$_GET['id']; ?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
                            <a href="batch_tutor_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
                            
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Test No</label>
                                    <div class="controls">
                                      <input type="text" name="no" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Question</label>
                                    <div class="controls">
                                       <textarea type="text" size="500" name="question" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="1">
                                    <label class="control-label" for="inputEmail">Option 1</label>
                                    <div class="controls">
                                        <textarea type="text" size="300" name="op1" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="2">
                                    <label class="control-label" for="inputEmail">Option 2</label>
                                    <div class="controls">
                                        <textarea type="text" size="300" name="op2" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="3">
                                    <label class="control-label" for="inputEmail">Option 3</label>
                                    <div class="controls">
                                       <textarea type="text" size="300" name="op3" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="4">
                                    <label class="control-label" for="inputEmail">option 4</label>
                                    <div class="controls">
                                       <textarea type="text" size="300" name="op4" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
								<input name="option" type="radio" value="5">
                                    <label class="control-label" for="inputEmail">Option 5</label>
                                    <div class="controls">
                                        <textarea type="text" size="300" name="op5" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Explanation</label>
                                    <div class="controls">
                                        <textarea type="text" size="500" name="explanation" id="inputEmail" placeholder="" required></textarea>
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
								$no = $_POST['no'];
								$question = $_POST['question'];
								$op1 = $_POST['op1'];
                                $op2 = $_POST['op2'];
								$op3 = $_POST['op3'];
								$op4 = $_POST['op4'];
								$op5 = $_POST['op5'];
								$explanation = $_POST['explanation'];
								$option = $_POST['option'];
								
								mysql_query("insert into mcq_question (test_no,batch_id,question,option1,option2,option3,option4,option5,correct_answer,explanation)
												values ('$no','$gett_id','$question','$op1','$op2','$op3','$op4','$op5','$option','$explanation') ") or die(mysql_error());
						
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