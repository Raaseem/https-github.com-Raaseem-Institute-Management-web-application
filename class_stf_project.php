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
							<a href="staff_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Lecture Halls Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Lecture Hall ID</th>
										<th>Lecture Hall Name</th>
										
                                    </tr>
                                </thead>
								
                                    <?php
                                    $query = mysql_query("select * from class") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $class_id = $row['class_id'];
                                        ?>

                                    <tr class="odd gradeX">

                                        <td><?php echo $row['class_id']; ?></td> 
                                        <td><?php echo $row['class_name']; ?></td>

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