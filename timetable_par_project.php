<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>

<script language='text/javascript' type='text/javascript'>

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
//Information of this script
//Auther : Kalansuriya Viraj Randeel
//Contact No : 0771543718
//please do not copy this script without auther permission
// All Rights Received //
	</script>

<body>

    <div class="row-fluid">
        <div class="span12">

            <?php include('navbar_project.php'); ?> 

            <div class="container">

                <div class="row-fluid">

                    <div class="span12">

                        <div class="hero-unit-3">
							<a href="parent_home_project.php" class="btn btn-success"><i class="icon-home icon-large"></i>&nbsp;Home</a>
							<a href="parent_home_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                            
                            <br><br>
							
							<form id="frm_filter" name="frm_filter">
							<input type="checkbox" name="filtering" value="check" checked="checked">I need to filter TimeTable
							<br><br>
							
							<div class="control-group">
								<label class="control-label" for="inputEmail"></label>
								<div class="controls">Lecture Hall Name
								   <select name="class_name" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_user_project.php')" >
										<option></option>
										<?php
										$query = mysql_query("select * from class");
										while ($row = mysql_fetch_array($query)) {
											?>
										   <option><?php echo $row['class_name'] ; ?></option>
											<?php
										}
										?>
									</select>
									
									&nbsp;&nbsp;Subject Name
									<select name="sub_name" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_user_project.php')" >
										<option></option>
										<?php
										$query = mysql_query("select * from subject");
										while ($row = mysql_fetch_array($query)) {
											?>
										   <option><?php echo $row['sub_name'] ; ?></option>
											<?php
										}
										?>
									</select>
									
									&nbsp;&nbsp;Grade
									<select name="grade" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_user_project.php')" >
										<option selected="selected"></option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
									</select>
									
									&nbsp;&nbsp;Batch ID
									<select name="batch_id" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_user_project.php')" >
										<option></option>
										<?php
										$query = mysql_query("select * from batch");
										while ($row = mysql_fetch_array($query)) {
											?>
										   <option><?php echo $row['batch_id'] ; ?></option>
											<?php
										}
										?>
									</select>
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="inputEmail"></label>
								<div class="controls">Tutor Name
								   <select name="tut_fname#tut_lname" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_user_project.php')" >
										<option></option>
										<?php
										$query = mysql_query("select * from tutor");
										while ($row = mysql_fetch_array($query)) {
											?>
										   <option><?php echo $row['tut_fname'] . " " . $row['tut_lname']; ?></option>
											<?php
										}
										?>
									</select>
									
									&nbsp;&nbsp;Timeslot
									<select name="timeslot" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_user_project.php')" >
										<option selected="selected"></option>
										<option>7.30am - 8.30am</option>
										<option>8.30am - 9.30 am</option>
										<option>9.30am - 10.30 am</option>
										<option>10.30 am - 11.30am</option>
										<option>11.30am - 12.30pm</option>
										<option>12.30pm - 1.30pm</option>
										<option>1.30pm - 2.30pm</option>
										<option>2.30pm - 3.30pm</option>
										<option>3.30pm - 4.30pm</option>
										<option>4.30pm - 5.30pm</option>
									</select>
									
									&nbsp;&nbsp;Day
									<select name="day" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_timetable_user_project.php')" >
										<option selected="selected"></option>
										<option>Sunday</option>
										<option>Monday</option>
										<option>Tuesday</option>
										<option>Wednesday</option>
										<option>Thursday</option>
										<option>Friday</option>
										<option>Saturday</option>
									</select>
								</div>
							</div>
							
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
										<th>Time Slot</th>
										<th>Day</th>
											
                                    </tr>
                                </thead>
								
                                <tbody id="Result">
                                    
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