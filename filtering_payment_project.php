<?php
	if(isset($_POST['filtering'])){
	//echo print_r($_POST);
	$months=array("January","February","March","April","May","June","July","August","September","October","November","December");
	$previous = 14;
	$last  = 14;
	$sample_query = "";
	$query_initiate = "SELECT * From `payment` WHERE 1";
		
		if($_POST['stu_id']){
		$stu_id = $_POST['stu_id'];
		$new_addon = " AND `stu_id` = '$stu_id'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['batch_id']){
		$batch_id = $_POST['batch_id'];
		$new_addon = " AND `batch_id` = '$batch_id'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['year']){
		$year = $_POST['year'];
		$new_addon = " AND `year` = '$year'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
				
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
		$new_addon = " AND `month` = '$str_month'" ;
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
				$new_addon = " AND `month` = '$month'" ;
				$query_initiate = $sample_query . $new_addon;
				//echo $query_initiate;
		mysql_select_db('project',  mysql_connect('localhost','root',''))or die(mysql_error());
		$query = mysql_query($query_initiate) or die("Error".mysql_error());
			while ($row = mysql_fetch_array($query)) {
				$pay_id = $row['pay_id'];
				?>
			  
					<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#e<?php echo $pay_id; ?>').tooltip('show')
					$('#e<?php echo $pay_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#d<?php echo $pay_id; ?>').tooltip('show')
					$('#d<?php echo $pay_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->

			 <tr class="odd gradeX">
			
			<td><?php echo $row['pay_id']; ?></td> 
			<td><?php echo $row['stu_id']; ?></td> 
			<td><?php echo $row['batch_id']; ?></td> 
			<td><?php echo $row['year']; ?></td> 
			<td><?php echo $row['month']; ?></td> 
			<td><?php echo "Rs." . $row['amount']; ?></td>
			<td><?php echo $row['pay_date']; ?></td>
			<td><?php echo $row['staff_id']; ?></td>
			
			<td width="100">
				<a rel="tooltip"  title="Delete Payment" id="d<?php echo $pay_id; ?>" href="#course_id<?php echo $pay_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				<a rel="tooltip"  title="Edit Payment" id="e<?php echo $pay_id; ?>" href="edit_payment_project.php<?php echo '?id='.$pay_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
			</td>
			<!-- user delete modal -->
			<div id="course_id<?php echo $pay_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Payment?</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					<a href="delete_payment_project.php<?php echo '?id=' . $pay_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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
				$pay_id = $row['pay_id'];
				?>
			  
					<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#e<?php echo $pay_id; ?>').tooltip('show')
					$('#e<?php echo $pay_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#d<?php echo $pay_id; ?>').tooltip('show')
					$('#d<?php echo $pay_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->

			 <tr class="odd gradeX">
			
			<td><?php echo $row['pay_id']; ?></td> 
			<td><?php echo $row['stu_id']; ?></td>
			<td><?php echo $row['batch_id']; ?></td>			
			<td><?php echo $row['year']; ?></td> 
			<td><?php echo $row['month']; ?></td> 
			<td><?php echo "Rs." . $row['amount']; ?></td> 
			<td><?php echo $row['pay_date']; ?></td> 
			<td><?php echo $row['staff_id']; ?></td>
						
			<td width="100">
				<a rel="tooltip"  title="Delete Payment" id="d<?php echo $pay_id; ?>" href="#course_id<?php echo $pay_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				<a rel="tooltip"  title="Edit Payment" id="e<?php echo $pay_id; ?>" href="edit_payment_project.php<?php echo '?id='.$pay_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
			</td>
			<!-- user delete modal -->
			<div id="course_id<?php echo $pay_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Payment?</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					<a href="delete_salary_project.php<?php echo '?id=' . $pay_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
				</div>
			</div>
			<!-- end delete modal -->

			</tr>
		<?php } 
		}
				
	}?>
