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
		  <a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
		  <a href="batch_stu_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>

			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Learning Materials Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                 
										<th>Learning Material (Click To Download)</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
									$select=mysql_query("select * from upload where batch_id='$gett_id'");
									while($row1=mysql_fetch_array($select)){
									$id=$row1['id'];
									?>

                                    <tr class="odd gradeX">
                                        
                                        <td><a href="download.php?filename=<?php echo $row1['name'];?>"><?php echo $row1['name'] ;?></a></td>
										
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
							
                        </div>
                    </div>
                </div>
                <?php include('footer_project.php'); ?>
            </div>
        </div>
    </div>

</body>
</html>