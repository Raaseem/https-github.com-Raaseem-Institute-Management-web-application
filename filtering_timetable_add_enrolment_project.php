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
			  
			 <tr class="odd gradeX">
			
			<td><?php echo $row['class_id']; ?></td> 
			<td><?php echo $row['sub_name']; ?></td> 
			<td><?php echo $row['grade']; ?></td>
			<td><?php echo $row['batch_id']; ?></td>
			<td><?php echo $row['tut_fname'] . " " . $row['tut_lname']; ?></td> 
			<td><?php echo $row['timeslot']; ?></td> 
			<td><?php echo $row['day']; ?></td>
			
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
			  
			 <tr class="odd gradeX">
			
			<td><?php echo $row['class_id']; ?></td> 
			<td><?php echo $row['sub_name']; ?></td> 
			<td><?php echo $row['grade']; ?></td>
			<td><?php echo $row['batch_id']; ?></td>
			<td><?php echo $row['tut_fname'] . " " . $row['tut_lname'] ; ?></td> 
			<td><?php echo $row['fromTime'] . " - " . $row['toTime']; ?></td> 
			<td><?php echo $row['day']; ?></td>
			
			</tr>
		<?php } 
		}
		
		}?>