<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
 
<!--<style type=text/css>
.enlarge img{
width:40px;
height:30px;
}
.enlarge:hover img{
width:10000px;
height:500px;
} 
</style> -->

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
							<a href="staff_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            
                            <br>
                            <br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Tutors Table</strong>
                                </div>
								
                                <thead>
                                    <tr>

                                        <th>Tutor ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>House No</th>
										<th>Street Name</th>
										<th>City</th>
										<th>Mobile No</th>
										<th>Land No</th>
										<th>Email ID</th>
										<th>Qualification</th>
										<th>Image</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from tutor") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $tutor_id = $row['tutor_id'];
                                        ?>

                                     <tr class="odd gradeX">
									
                                    <td><?php echo $row['tutor_id']; ?></td> 
                                    <td><?php echo $row['tut_fname']; ?></td> 
                                    <td><?php echo $row['tut_lname']; ?></td> 
                                    <td><?php echo $row['t_house_no']; ?></td> 
									<td><?php echo $row['t_street_name']; ?></td> 
									<td><?php echo $row['t_city']; ?></td>
									<td><?php echo $row['t_mobile_no']; ?></td>
									<td><?php echo $row['t_land_no']; ?></td>
									<td><?php echo $row['t_email_id']; ?></td>
									<td><?php echo $row['qualification']; ?></td>
									<td width="40"><img class="img-rounded" src="<?php echo $row['location']; ?>" height="30" width="40"></td>
									<!-- <td><a href = "#" class = "enlarge"><img src ="<?php echo $row['t_location']; ?> "></a> -->
									
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
