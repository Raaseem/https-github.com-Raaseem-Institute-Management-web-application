<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>

<!-- <script>
$(document).ready(function(){
	$("#frm_filter").trigger('Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_project.php')"');
}):
</script> -->

 <!-- <script language='text/javascript' type='text/javascript'>

    var Ajax;
    Ajax = {
        url: null,
        content: null,
        init: function(name, url) {
            var form = null;
            if (form = document[name]) {
                var ele = form.elements;
                var elel = document.getElementById(name).length;
                var content = "";
                var flag = false;
                var i = elel;
                i--;
                for (i; i >= 0; i--) {

                    if (flag) {
                        content += "&";
                    }
                    if (document.getElementById(name)[i].getAttribute("type") == "checkbox" || document.getElementById(name)[i].getAttribute("type") === "radio") {
                        if (document.getElementById(name)[i].checked) {
                            content += document.getElementById(name)[i].name + "=" + document.getElementById(name)[i].value;
                            flag = true;
                            if(document.getElementById(name)[1].getAttribute("disabled")=="enabled"){
                                content += document.getElementById(name)[i].name + "Marks=" + document.getElementById(name)[i].value;
                            }
                        }
                    } else {
                        content += document.getElementById(name)[i].name + "=" + document.getElementById(name)[i].value;
                        flag = true;
                    }

                }
                Ajax.content = content;
                Ajax.url = url;
                //Ajax.sendForm(url,content);
                sendForm(url, content);
                console.log("This part is working ");
                //alert(content);
            } else {
                alert("The Form is nOt Found, Please Contact Your Service Provider")
            }
        }
    }


    function sendForm(link, data) {
        if (data) {
            var xmlhttp = null;
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                //console.log("MX is created is working");
            } catch (e) {
                try {
                    xmlhttp = new XMLHttpRequest();
                    //console.log("X is created is working");
                } catch (e) {
                    alert("Your Browser is Not supporting for Ajax");
                }
            }
            if (xmlhttp) {
                xmlhttp.open("POST",link, true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send(data);
                console.log("data sent")
                xmlhttp.onreadystatechange=function()
                {
                if (xmlhttp.readyState==4 )
                  {
				  //alert(xmlhttp.responseText);
                  document.getElementById('Result').innerHTML=xmlhttp.responseText;
                  }
                }
            }
        }
    }

	</script> -->

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="admin_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            <a href="add_timetable_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;New Timeslot</a>
							<a href="searchTT.php" class="btn btn-success"><i class="icon-filter icon-large"></i>&nbsp;Filter</a>

							<br><br>
							
							
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Time Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Lecture Hall ID</th>
										<th>Subject Name</th>
										<th>Grade</th>
										<th>Batch ID</th>
										<th>Tutor Name</th>
                                        <th>Time slot</th>
										<th>Day</th>
										<th>Action</th>
										
                                    </tr>
                                </thead>
								
                                <tbody id="Result">
								<?php
                                    $query = mysql_query("SELECT `a`.*,`b`.*,`c`.*,`d`.*,`e`.*
									From`timetable` AS `a` , `batch` AS `b` , `tutor` AS `c` , `subject` AS `d` , `class` AS `e`
									WHERE `a`.`batch_id` = `b`.`batch_id`
									AND `b`.`tutor_id` = `c`.`tutor_id`
									AND `b`.`sub_id` = `d`.`sub_id`
									AND `a`.`class_id` = `e`.`class_id`") or die(mysql_error());
									
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