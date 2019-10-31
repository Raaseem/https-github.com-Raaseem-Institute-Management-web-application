<?php
	if(isset($_POST['filtering'])){
	//echo print_r($_POST);
	
	$sample_query = "";
	$query_initiate = "SELECT `a`.*,`b`.*,`c`.*,`d`.*,`e`.*
					   From`timetable` AS `a` , `batch` AS `b` , `tutor` AS `c` , `subject` AS `d` , `class` AS `e`
					   WHERE `a`.`batch_id` = `b`.`batch_id`
					   AND `b`.`tutor_id` = `c`.`tutor_id`
					   AND `b`.`sub_id` = `d`.`sub_id`
					   AND `a`.`class_id` = `e`.`class_id`";
		
		if($_POST['class_name']){
		$class_name = $_POST['class_name'];
		$new_addon = " AND `e`.`class_name` = '$class_name'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['sub_name']){
		$sub_name = $_POST['sub_name'];
		$new_addon = " AND `d`.`sub_name` = '$sub_name'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['grade']){
		$grade = $_POST['grade'];
		$new_addon = " AND `b`.`grade` = '$grade'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['batch_id']){
		$batch_id = $_POST['batch_id'];
		$new_addon = " AND `b`.`batch_id` = '$batch_id'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['tut_fname#tut_lname']){
		$fname = $_POST['tut_fname#tut_lname'];
		$names = explode(" ", $fname );
		$new_addon = " AND `c`.`tut_fname` = '$names[0]' AND `c`.`tut_lname` = '$names[1]'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		// if($_POST['timeslot']){
		// $timeslot = $_POST['timeslot'];
		// $new_addon = " AND `a`.`timeslot` = '$timeslot'" ;
		// $query_initiate = $query_initiate . $new_addon;
		// }
		if($_POST['day']){
		$day = $_POST['day'];
		$new_addon = " AND `a`.`day` = '$day'" ;
		$query_initiate = $query_initiate . $new_addon;
		
	
				//echo $query_initiate;
		mysql_select_db('project',  mysql_connect('localhost','root',''))or die(mysql_error());
		$query = mysql_query($query_initiate) or die("Error".mysql_error());
			while ($row = mysql_fetch_array($query)) {
				$tt_id = $row['tt_id'];
				?>
			  

					<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#e<?php echo $tt_id; ?>').tooltip('show')
					$('#e<?php echo $tt_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#d<?php echo $tt_id; ?>').tooltip('show')
					$('#d<?php echo $tt_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->

			 <tr class="odd gradeX">
			
			<td><?php echo $row['class_id']; ?></td> 
			<td><?php echo $row['sub_name']; ?></td> 
			<td><?php echo $row['grade']; ?></td>
			<td><?php echo $row['batch_id']; ?></td>
			<td><?php echo $row['tut_fname'] . " " . $row['tut_lname']; ?></td> 
			<td><?php echo $row['fromTime'] . " - " . $row['toTime']; ?></td> 
			<td><?php echo $row['day']; ?></td>
			
			<td width="100">
				<a rel="tooltip"  title="Delete Timetable" id="d<?php echo $tt_id; ?>" href="#course_id<?php echo $tt_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				<a rel="tooltip"  title="Edit Timetable" id="e<?php echo $tt_id; ?>" href="edit_timetable_project.php<?php echo '?id='.$tt_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
			</td>
			<!-- user delete modal -->
			<div id="course_id<?php echo $tt_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Timeslot?</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					<a href="delete_timetable_project.php<?php echo '?id=' . $tt_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
				</div>
			</div>
			<!-- end delete modal -->

			</tr>
		<?php } 
			}
		
		else{
			//echo $query_initiate;
        mysql_select_db('project',  mysql_connect('localhost','root',''))or die(mysql_error());
		$query = mysql_query($query_initiate) or die("Error".mysql_error());
			while ($row = mysql_fetch_array($query)) {
				$tt_id = $row['tt_id'];
				?>
			  
					<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#e<?php echo $tt_id; ?>').tooltip('show')
					$('#e<?php echo $tt_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->
			<!-- script -->
			<script type="text/javascript">
				$(document).ready(function(){
						
					$('#d<?php echo $tt_id; ?>').tooltip('show')
					$('#d<?php echo $tt_id; ?>').tooltip('hide')
				});
			</script>
			<!-- end script -->

			 <tr class="odd gradeX">
			
			<td><?php echo $row['class_id']; ?></td> 
			<td><?php echo $row['sub_name']; ?></td> 
			<td><?php echo $row['grade']; ?></td>
			<td><?php echo $row['batch_id']; ?></td>
			<td><?php echo $row['tut_fname'] . " " . $row['tut_lname'] ; ?></td> 
			<td><?php echo $row['fromTime'] . " - " . $row['toTime']; ?></td> 
			<td><?php echo $row['day']; ?></td>
			
			<td width="100">
				<a rel="tooltip"  title="Delete Timetable" id="d<?php echo $tt_id; ?>" href="#course_id<?php echo $tt_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				<a rel="tooltip"  title="Edit Timetable" id="e<?php echo $tt_id; ?>" href="edit_timetable_project.php<?php echo '?id='.$tt_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
			</td>
			<!-- user delete modal -->
			<div id="course_id<?php echo $tt_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				</div>
				<div class="modal-body">
					<div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Timeslot?</div>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					<a href="delete_timetable_project.php<?php echo '?id=' . $tt_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
				</div>
			</div>
			<!-- end delete modal -->

			</tr>
		<?php } 
		}
		
		}?>