<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start() ?>
<?php  $get_id=$_GET['id']; 
$gett_id=$_SESSION['sid'];?>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="student_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="batch_stu_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Payments Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                        
										<th>Batch ID</th>
										<th>Year</th>
										<th>Month</th>
										<th>Pay Date</th>
										<th>Amount</th>
										<th>Staff Name</th>			
							
                                    </tr>
                                </thead>
								
                                <tbody>
								
								<?php
								$payment_query=mysql_query("select * from payment,staff where batch_id='$get_id' and stu_id='$gett_id' and staff.staff_id=payment.staff_id ")
																or die(mysql_error());
								while($row=mysql_fetch_array($payment_query)){
								?>
                                   
                                    <tr class="odd gradeX">
                                    
										<td><?php echo $row['batch_id']; ?></td>									
										<td><?php echo $row['year']; ?></td> 
										<td><?php echo $row['month']; ?></td> 
										<td><?php echo $row['pay_date']; ?></td> 
										<td><?php echo "Rs." . $row['amount']; ?></td> 
										<td><?php echo $row['stf_fname'] . " " . $row['stf_lname']; ?></td> 

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