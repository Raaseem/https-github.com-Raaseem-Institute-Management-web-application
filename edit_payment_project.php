<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php session_start(); ?>
<?php  $get_id=$_GET['id']; ?>
<?php
$payment_query=mysql_query("select * from payment where pay_id='$get_id'")or die(mysql_error());
$row=mysql_fetch_array($payment_query);
?>
<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">
                        <div class="hero-unit-3">
                            <a href="payment_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br>
                            <br>
							
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                       
								 <div class="control-group">
                                    <label class="control-label" for="inputEmail">Payment ID</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="pay_id" value="<?php echo $row['pay_id']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Amount</label>
                                    <div class="controls">
                                        <input type="text" id="inputEmail" name="amount" value="<?php echo $row['amount']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Date</label>
                                    <div class="controls">
                                        <input type="date" id="inputEmail" name="pay_date" value="<?php echo $row['pay_date']; ?>" required>
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Student ID</label>
                                    <div class="controls" >
                                       <select name="stu_id" class="span3" required>
                                            <option> <?php echo $row['stu_id']; ?> </option>
                                            <?php 
                                            $query = mysql_query("select * from student");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option><?php echo $row['stu_id']; ?></option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                   
                                    </div>
                                </div>
								
								<div class="control-group">
                                    <label class="control-label" for="inputEmail">Batch ID</label>
                                    <div class="controls" >
                                       <select name="batch_id" class="span3" required>
                                            <option> <?php echo $row['batch_id']; ?> </option>
                                            <?php 
                                            $query = mysql_query("select * from batch");
                                            while ($row = mysql_fetch_array($query)) {
                                                ?>
                                                <option> <?php echo $row['batch_id']; ?> </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                   
                                    </div>
                                </div>
																
                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="save" class="btn btn-info"><i class="icon-save icon-large"></i>&nbsp;Save</button>
                                    </div>
                                </div>
                            
							</form>

                            <?php
                            if (isset($_POST['save'])) {
                                $pay_id = $_POST['pay_id'];
                                $amount = $_POST['amount'];
								$pay_date = $_POST['pay_date'];
								$stu_id = $_POST['stu_id'];
								$sub_id = $_POST['sub_id'];                         
			
		mysql_query("update payment set pay_id='$pay_id',amount='$amount',pay_date='$pay_date',stu_id='$stu_id',sub_id='$sub_id' where pay_id='$get_id'
			")or die(mysql_error());

                                header('location:payment_project.php');
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
