<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start();
$get_id=$_SESSION['sid']; ?> 
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
						<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
						 <a href="forum_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
								 <form class="form-horizontal" method="POST" enctype="multipart/form-data">
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls">
                                       <select name="batch_id" class="span3" >
                                            <option></option>
                                            <?php
                                            $query = mysql_query("select * from batch,student_batch,student where student.stu_id='$get_id' and student_batch.stu_id=student.stu_id and
																		student_batch.batch_id=batch.batch_id");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['batch_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Topic</label>
                                    <div class="controls">
                                        <input type="text" name="topic" id="inputEmail" placeholder="" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Detail</label>
                                    <div class="controls">
                                        <textarea type="text" size="100" name="detail" id="inputEmail" placeholder="" required></textarea>
                                    </div>
                                </div>
								
								<?php $sql=mysql_query("select * from  student where stu_id='$get_id'")or die(mysql_error());
									  $rows=mysql_fetch_array($sql);
									  $stu_fname = $rows['stu_fname'];
									  $stu_lname = $rows['stu_lname'];
									  
								?>
								
								<div class="control-group">
                                   <!-- <label class="control-label" for="inputEmail">Name</label> -->
                                   <div class="controls">
                                       <td><input name="name" type="hidden" id="name" value="<?php echo $stu_fname . " " . $stu_lname ?>"></td>
                                    </div>
                                </div>
								
                                <div class="control-group">
                                    <div class="controls">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Submit</button>
                                    </div>
                                </div>
								
                            </form>
							
							   <?php
                       
								if (isset($_POST['submit'])) {
                                $batch_id = $_POST['batch_id'];
								$topic = $_POST['topic'];
								$detail = $_POST['detail'];
								$name = $_POST['name'];
								$datetime=date("d/m/y");
                                     					
                                $query = mysql_query("insert into forum_question (batch_id,topic,detail,name,datetime)
												values ('$batch_id','$topic','$detail','$name','$datetime')                                    
                                                        ") or die(mysql_error());
                                                                            
                                if($query){
                                    ?>
                                    <div class="alert alert-info"><strong>Successfully uploaded</strong></div>
                                    <?php
                                }
                              //  header('location:forum_project.php');
								
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