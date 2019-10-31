<?php
include('header_project.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>

<body>

    <?php include('navhead_project.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
			
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
				
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">

                        <li class="nav-header">Links</li>
						
                        <li>
							<a href="index_project.php"><i class="icon-home icon-large"></i>&nbsp;Home
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
								</div>
							</a>
						</li>

                        <li>
							<a href="sitemap_project.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div>
							</a>
						</li>
								
                        <li>
							<a href="contact_project.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div>
							</a>
						</li>
                      
                        <li>
							<a href="about_project.php"><i class="icon-list-alt icon-large"></i>&nbsp;About Us
                                <div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
						
						<li   class="active">
							<a href="timtable_project.php"><i class="icon-calendar icon-large"></i>&nbsp;TimeTable                               
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>
						</li>
							
						<li>
							<a href="news_project.php"><i class="icon-comment icon-large"></i>&nbsp;News                            
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>
						</li>
												
                    </ul>
                </div>

            </div>

            <div class="span9">
				<div class="hero-unit-3">
                            <a href="index_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="searchTT2.php" class="btn btn-success"><i class="icon-search icon-large"></i>&nbsp;Filter</a>

							<br><br>
                
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Time Table</strong>
                                </div>
                                <thead>
                                    <tr>
                                
                                        <th>Class ID</th>
										<th>Subject Name</th>
										<th>Grade</th>
										<th>Batch ID</th>
										<th>Tutor Name</th>
										<th>Time Slot</th>
										<th>Day</th>
											
                                    </tr>
                                </thead>
                                <tbody id="Result">
                                <?php
                                    $query = mysql_query("SELECT `a`.*,`b`.*,`c`.*,`d`.*,`e`.*
									From`timetable` AS `a` , `batch` AS `b` , `tutor` AS `c` , `subject` AS `d` , `class` AS `e`
									WHERE `a`.`batch_id` = `b`.`batch_id`
									AND `b`.`tutor_id` = `c`.`tutor_id`
									AND `b`.`sub_id` = `d`.`sub_id`
									AND `a`.`class_id` = `e`.`class_id`") or die(mysql_error());
									
									while ($row = mysql_fetch_array($query)) {
                                        $tt_id = $row['tt_id'];
                                        ?>
								
                                    <tr class="odd gradeX">
                            
									<td><?php echo $row['class_id']; ?></td> 
									<td><?php echo $row['sub_name']; ?></td> 
									<td><?php echo $row['grade']; ?></td>
									<td><?php echo $row['batch_id']; ?></td>
                                    <td><?php echo $row['tut_fname'] . " " . $row['tut_lname']; ?></td> 
									<td><?php echo $row['fromTime'] . " - " . $row['toTime']; ?></td> 
									<td><?php echo $row['day']; ?></td>
                                       
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