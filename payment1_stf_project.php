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
          <div class="hero-unit-3"> <a href="payment_stf_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a> <br>
            <br>
            
            <form class="form-horizontal" method="POST" action="payment2_stf_project.php">
 
            <div class="control-group">
               <label class="control-label" for="inputEmail">Batch ID</label>
                <div class="controls">				
                  <select name="batch_id" class="span3" >
                    <option></option>
                    <?php
                    $query = mysql_query("select * from batch");
                    while ($row = mysql_fetch_array($query)) {
					          $batch_id = $row['batch_id'];
                    ?>
                    <option><?php echo $row['batch_id']; ?></option>                    
					<?php
					}
					?>
                  </select>
                </div>
            </div>
			  
			<div class="control-group">
                <div class="controls">
					<input type="submit" name="btnsubmit" class="btn btn-info">
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