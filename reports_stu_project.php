<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start() ?>
<?php $get_id=$_SESSION['sid']; ?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Reports Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                        
										<th>Report name</th>
										<th>Generate</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                   
                                    <tr class="odd gradeX">
                                    
                                        <td>Monthly Class Test Mark</td>						
                                        <td><a href="monthly_test_mark_stu_project.php" class="btn btn-success"><i class="icon-ok icon-large"></i>&nbsp;</a></td>
	                           
                                    </tr>
                               
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