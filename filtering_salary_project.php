<?php
	if(isset($_POST['filtering'])){
	//echo print_r($_POST);
	$months=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$previous = 14;
	$last  = 14;
	$sample_query = "";
	$query_initiate = "SELECT `a`.*,`b`.* From `tutor` AS `a` , `salary_tutor` AS `b` WHERE `a`.`tutor_id` = `b`.`tutor_id`";
		if($_POST['tut_fname#tut_lname']){
		$fname = $_POST['tut_fname#tut_lname'];
		$names = explode(" ", $fname );
		$new_addon = " AND `a`.`tut_fname` = '$names[0]' AND `a`.`tut_lname` = '$names[1]'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['year']){
		$year = $_POST['year'];
		$new_addon = " AND `b`.`year` = '$year'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		
		// if($_POST['status']){
		// $status = $_POST['status'];
		// $new_addon = " AND `b`.`status` = '$status'" ;
		// $query_initiate = $query_initiate . $new_addon;
		// }
		$sample_query = $query_initiate;
		if($_POST['month#to']!= "" && $_POST['month#from']!= "" && $last == 14 && $previous == 14){
		$str_month = $_POST['month#to'];
			foreach($months as $key => $value){
				if($str_month==$value){
				$last = $key;
				}
			}
		
		}
		if($_POST['month#from']!=""){
		$str_month = $_POST['month#from'];
		$new_addon = " AND `b`.`month` = '$str_month'" ;
		$query_initiate = $query_initiate . $new_addon;
			foreach($months as $key => $value){
				if($str_month==$value){
				$previous = $key;
				}
			}
		}
		
		if($previous < $last && $previous!= 14 && $last != 14){
			for($previous;$previous<$last;$previous++){
				$month=$months[$previous];
				$new_addon = " AND `b`.`month` = '$month'" ;
				$query_initiate = $sample_query . $new_addon;
				//echo $query_initiate;
		mysql_select_db('project',  mysql_connect('localhost','root',''))or die(mysql_error());
		$query = mysql_query($query_initiate) or die("Error".mysql_error());
			while ($row = mysql_fetch_array($query)) {
				$sal_id = $row['sal_id'];
				?>
			  

					<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#e<?php echo $sal_id; ?>').tooltip('show')
					$('#e<?php echo $sal_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#d<?php echo $sal_id; ?>').tooltip('show')
					$('#d<?php echo $sal_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->

			 <tr class="odd gradeX">
			
			<td><?php echo $row['sal_id']; ?></td> 
			<td><?php echo $row['tutor_id']; ?></td>
			<td><?php echo $row['year']; ?></td> 
			<td><?php echo $row['month']; ?></td> 
			<td><?php echo $row['status']; ?></td> 
			<td><?php echo "Rs." . $row['amount']; ?></td> 

			
			<td width="100">
				<a rel="tooltip"  title="Delete Salary" id="d<?php echo $sal_id; ?>" href="#course_id<?php echo $sal_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				<a rel="tooltip"  title="Edit Salary" id="e<?php echo $sal_id; ?>" href="edit_salary_project.php<?php echo '?id='.$sal_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
			</td>
			<!-- user delete modal -->
			<div id="course_id<?php echo $sal_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Salary?</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					<a href="delete_salary_project.php<?php echo '?id=' . $sal_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
				</div>
			</div>
			<!-- end delete modal -->

			</tr>
		<?php } 
			}
		
		}else{
			//echo $query_initiate;
        mysql_select_db('project',  mysql_connect('localhost','root',''))or die(mysql_error());
		$query = mysql_query($query_initiate) or die("Error".mysql_error());
			while ($row = mysql_fetch_array($query)) {
				$sal_id = $row['sal_id'];
				?>
			  

					<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#e<?php echo $sal_id; ?>').tooltip('show')
					$('#e<?php echo $sal_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#d<?php echo $sal_id; ?>').tooltip('show')
					$('#d<?php echo $sal_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->

			 <tr class="odd gradeX">
			
			<td><?php echo $row['sal_id']; ?></td> 
			<td><?php echo $row['tutor_id']; ?></td>
			<td><?php echo $row['year']; ?></td> 
			<td><?php echo $row['month']; ?></td> 
			<td><?php echo $row['status']; ?></td> 
			<td><?php echo "Rs." . $row['amount']; ?></td> 

			
			<td width="100">
				<a rel="tooltip"  title="Delete Salary" id="d<?php echo $sal_id; ?>" href="#course_id<?php echo $sal_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				<a rel="tooltip"  title="Edit Salary" id="e<?php echo $sal_id; ?>" href="edit_salary_project.php<?php echo '?id='.$sal_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
			</td>
			<!-- user delete modal -->
			<div id="course_id<?php echo $sal_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Salary?</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					<a href="delete_salary_project.php<?php echo '?id=' . $sal_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
				</div>
			</div>
			<!-- end delete modal -->

			</tr>
		<?php } 
		}
		
		
	}?>

