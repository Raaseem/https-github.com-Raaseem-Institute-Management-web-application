<?php
	if(isset($_POST['filtering'])){
	//echo print_r($_POST);
	$query_initiate = "SELECT * From `tutor_attendance` WHERE 1";
		
		if($_POST['tutor_id']){
		$tutor_id = $_POST['tutor_id'];
		$new_addon = " AND `tutor_id` = '$tutor_id'" ;
		$query_initiate = $query_initiate . $new_addon;
		}
		if($_POST['batch_id']){
		$batch_id = $_POST['batch_id'];
		$new_addon = " AND `batch_id` = '$batch_id'" ;
		$query_initiate = $query_initiate . $new_addon;
		
		//echo $query_initiate;
		mysql_select_db('project',  mysql_connect('localhost','root',''))or die(mysql_error());
		$query = mysql_query($query_initiate) or die("Error".mysql_error());
			while ($row = mysql_fetch_array($query)) {
				$att_id = $row['att_id'];
				?>
				
				 <!-- script -->
        <script type="text/javascript">
			$(document).ready(function(){
                                                
			$('#e<?php echo $att_id; ?>').tooltip('show')
			$('#e<?php echo $att_id; ?>').tooltip('hide')
			});
        </script>
                <!-- end script -->
									
				<!-- script -->
        <script type="text/javascript">
            $(document).ready(function(){
                                                
            $('#d<?php echo $att_id; ?>').tooltip('show')
            $('#d<?php echo $att_id; ?>').tooltip('hide')
            });
        </script>
                <!-- end script -->

        <tr class="odd gradeX">
                                   
            <td><?php echo $row['date']; ?></td> 
            <td><?php echo $row['tutor_id']; ?></td> 
			<td><?php echo $row['tutor_name']; ?></td> 
			<td><?php echo $row['batch_id']; ?></td> 
			<td><?php echo $row['status']; ?></td> 

            <td width="100">
				<a rel="tooltip"  title="Delete Attendance" id="d<?php echo $att_id; ?>" href="#attendance_id<?php echo $att_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
				<a rel="tooltip"  title="Edit Attendance" id="e<?php echo $att_id; ?>" href="edit_tutor_attendance_project.php<?php echo '?id='.$att_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
            </td>
										
                <!-- user delete modal -->
            <div id="attendance_id<?php echo $att_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Attendance?</div>
            </div>
            <div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                <a href="delete_tutor_attendance_project.php<?php echo '?id=' .$att_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
            </div>
            </div>
                <!-- end delete modal -->

        </tr>
        
		<?php }
	
		}else{
			//echo $query_initiate;
        mysql_select_db('project',  mysql_connect('localhost','root',''))or die(mysql_error());
		$query = mysql_query($query_initiate) or die("Error".mysql_error());
			while ($row = mysql_fetch_array($query)) {
				$att_id = $row['att_id'];								
				?>
				
				 <!-- script -->
			<script type="text/javascript">
                $(document).ready(function(){
                                                
                $('#e<?php echo $att_id; ?>').tooltip('show')
                $('#e<?php echo $att_id; ?>').tooltip('hide')
                });
            </script>
                <!-- end script -->
									
                <!-- script -->
            <script type="text/javascript">
                $(document).ready(function(){
                                                
				$('#d<?php echo $att_id; ?>').tooltip('show')
                $('#d<?php echo $att_id; ?>').tooltip('hide')
                });
            </script>
                <!-- end script -->

			<tr class="odd gradeX">
                                   
                <td><?php echo $row['date']; ?></td> 
                <td><?php echo $row['tutor_id']; ?></td> 
				<td><?php echo $row['tutor_name']; ?></td> 
				<td><?php echo $row['batch_id']; ?></td> 
				<td><?php echo $row['status']; ?></td> 

                <td width="100">
                    <a rel="tooltip"  title="Delete Attendance" id="d<?php echo $att_id; ?>" href="#attendance_id<?php echo $att_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                    <a rel="tooltip"  title="Edit Attendance" id="e<?php echo $att_id; ?>" href="edit_tutor_attendance_project.php<?php echo '?id='.$att_id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
                </td>
										
                    <!-- user delete modal -->
                <div id="attendance_id<?php echo $att_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                </div>
                    <div class="modal-body">
                    <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Attendance?</div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
					<a href="delete_tutor_attendance_project.php<?php echo '?id=' .$att_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
				</div>
                </div>
					<!-- end delete modal -->

			</tr>
            <?php }
		}
		 } ?>							