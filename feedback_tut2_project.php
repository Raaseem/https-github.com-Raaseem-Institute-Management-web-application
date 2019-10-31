<?php include('header_project.php'); ?>
<?php //include('session.php'); ?>
<?php error_reporting(E_ERROR); ?>
<?php session_start();
$get_id=$_SESSION['tid'];
$batch_id= $_POST['batch_id']; 
$year= $_POST['year'];
$rating1 = 0;
$rating2 = 0;
$rating3 = 0;
$rating4 = 0;
$rating5 = 0;
$rating6 = 0;
$rating7 = 0;
$rating8 = 0;
$rating9 = 0;
$rating10 = 0;
$total = 0;

$count = 0;?>

<?php
    function rate1($rating1) {
        if ($rating1 < 3) return 'background-color:#ffff00';
        if ($rating1 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate2($rating2) {
        if ($rating2 < 3) return 'background-color:#ffff00';
        if ($rating2 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate3($rating3) {
        if ($rating3 < 3) return 'background-color:#ffff00';
        if ($rating3 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate4($rating4) {
        if ($rating4 < 3) return 'background-color:#ffff00';
        if ($rating4 < 5) return 'background-color:#00ff00';
        return '';
    }
	
   function rate5($rating5) {
        if ($rating5 < 3) return 'background-color:#ffff00';
        if ($rating5 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate6($rating6) {
        if ($rating6 < 3) return 'background-color:#ffff00';
        if ($rating6 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate7($rating7) {
        if ($rating7 < 3) return 'background-color:#ffff00';
        if ($rating7 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate8($rating8) {
        if ($rating8 < 3) return 'background-color:#ffff00';
        if ($rating8 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate9($rating9) {
        if ($rating9 < 3) return 'background-color:#ffff00';
        if ($rating9 < 5) return 'background-color:#00ff00';
        return '';
    }
	
	function rate10($rating10) {
        if ($rating10 < 3) return 'background-color:#ffff00';
        if ($rating10 < 5) return 'background-color:#00ff00';
        return '';
    }
?>			

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?>

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="tutor_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
                            <a href="feedback_tut1_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <br><br>
							
							<form class="form-horizontal" method="POST" enctype="multipart/form-data">
													
						<?php	
					
					$query = mysql_query("select distinct feedback.batch_id, feedback.year from feedback,batch where batch.batch_id=feedback.batch_id and batch.tutor_id='$get_id'")or die(mysql_error());
								 while ($row = mysql_fetch_array($query)){
								$bat_id= $row['batch_id'];
								$yr= $row['year'];
							
								if($batch_id==$bat_id && $year==$yr){
															
						$feed = mysql_query("SELECT * FROM feedback 
							WHERE feedback.batch_id='$batch_id' and feedback.year='$year'") 						
						or die(mysql_error());
						
		
						while ($row = mysql_fetch_array($feed)) 
						{
						$rating1 = $rating1 + $row['rating1']; 
						$rating2 = $rating2 + $row['rating2'];
						$rating3 = $rating3 + $row['rating3'];
						$rating4 = $rating4 + $row['rating4'];
						$rating5 = $rating5 + $row['rating5'];
						$rating6 = $rating6 + $row['rating6'];
						$rating7 = $rating7 + $row['rating7'];
						$rating8 = $rating8 + $row['rating8'];
						$rating9 = $rating9 + $row['rating9'];
						$rating10 = $rating10 + $row['rating10'];
						
						$count = $count+1;
						?>
						
						 <?php
						}
						
			
					   $rating1 = $rating1/$count;
					   $rating2 = $rating2/$count;
					   $rating3 = $rating3/$count;
					   $rating4 = $rating4/$count;
					   $rating5 = $rating5/$count;
		    		   $rating6 = $rating6/$count; 
				       $rating7 = $rating7/$count;
					   $rating8 = $rating8/$count;
					   $rating9 = $rating9/$count;
					   $rating10 = $rating10/$count; 
					   
					   $total = (($rating1 + $rating2 + $rating3 + $rating4 + $rating5 + $rating6 + $rating7 + $rating8 + $rating9 + $rating10)/40) * 100;
									
					   if($total<=25){
					   $rate="Poor";}
					   else if($total<=50){
					   $rate="Fair";}
					   else if($total<=75){
					   $rate="Good";}
					   else{
					   $rate="Excellent";}
					   
					   $stud = mysql_query("SELECT stu_id FROM student_batch WHERE batch_id='$batch_id' ") or die(mysql_error());
							
						while ($row = mysql_fetch_array($stud)) 
						{
						
						$count1 = $count1+1;
						}
						?>
			
					 <table align="center" border="1" cellpadding="2" cellspacing="0" >    
					 
                                <thead>
                                    <tr>
                            
                                        <th>View</th>
										<th>Mean (Out of Four)</th>
										
                                    </tr>
                                </thead>
								
								<tbody>
									<tr style="<?=rate1($rating1)?>">
										<td width="68%">1. The learning outcomes were clearly explained at the commencement of the course unit</td>
										<td width="20%" align="center"><?php echo $rating1; ?></td>
									</tr>
									
									<tr style="<?=rate2($rating2)?>">
										<td width="68%">2. The tutor came prepared for the class</td>
										<td width="20%" align="center"><?php echo $rating2; ?></td>
									</tr>
									
									<tr style="<?=rate3($rating3)?>">
										<td width="68%">3.   Lectures were well organized</td>
										<td width="20%" align="center"><?php echo $rating3; ?></td>
									</tr>
									
									<tr style="<?=rate4($rating4)?>">
										<td width="68%">4.   The tutor was very clear in teaching and was easy to understand</td>
										<td width="20%" align="center"><?php echo $rating4; ?></td>
									</tr>
									
									<tr style="<?=rate5($rating5)?>">
										<td width="68%">5.   Lectures were clearly audible</td>
										<td width="20%" align="center"><?php echo $rating5; ?></td>
									</tr>
									
									<tr style="<?=rate6($rating6)?>">
										<td width="68%">6.  The place of lecturing was right for me</td>
										<td width="20%" align="center"><?php echo $rating6; ?></td>
									</tr>
									
									<tr style="<?=rate7($rating7)?>">
										<td width="68%">7.   Method of lecturing held my attention</td>
										<td width="20%" align="center"><?php echo $rating7; ?></td>
									</tr>
									
									<tr style="<?=rate8($rating8)?>">
										<td width="68%">8.   Used the Learning System in teaching process when necessary</td>
										<td width="20%" align="center"><?php echo $rating8; ?></td>
									</tr>
									
									<tr style="<?=rate9($rating9)?>">
										<td width="68%">9.   Class tests and MCQ practice exams have been helpful in understanding the subject matter</td>
										<td width="20%" align="center"><?php echo $rating9; ?></td>
									</tr>
									
									<tr style="<?=rate10($rating10)?>">
										<td width="68%">10. Students were encouraged to ask questions</td>
										<td width="20%" align="center"><?php echo $rating10; ?></td>
									</tr>
									
								</tbody>
								
							</table>
							
							<br><br>
							
								<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
								<tr>
								<td bgcolor="#F8F7F1"><strong>Overall Performance : <?php echo $total; ?> %</strong><br><br></td>
								</tr>
								<tr>
								<td bgcolor="#F8F7F1"><strong>Grade : <?php echo $rate; ?></strong><br><br></td>
								</tr>
								<tr>
								<td bgcolor="#F8F7F1"><strong>Number Of Students Participated : <?php echo $count; ?> out of <?php echo $count1; ?></strong><br><br></td>
								</tr>
								</table>
								
								<?php } 
									}
									
								?>
																
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