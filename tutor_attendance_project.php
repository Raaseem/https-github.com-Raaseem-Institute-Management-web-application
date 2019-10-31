<?php include('header_project.php'); ?>
<?php //include('session.php'); ?> 
<?php session_start(); ?>

<?php include('header_project.php'); ?>
 
<!--<style type=text/css>
.enlarge img{
width:40px;
height:30px;
}
.enlarge:hover img{
width:10000px;
height:500px;
} 
</style> -->

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

	</script>

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
                            <a href="add_tutor_attendance_project.php" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Attendance</a>
                            <br><br>
							
							<form id="frm_filter" name="frm_filter">
							<input type="checkbox" name="filtering" value="check" checked="checked">I need to filter Attendance Data
							<br><br>

							<div class="control-group">
								<label class="control-label" for="inputEmail">Tutor ID</label>
								<div class="controls">
								   <select name="tutor_id" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_tutor_attendance_project.php')" >
										<option></option>
										<?php
										$query = mysql_query("select * from tutor");
										while ($row = mysql_fetch_array($query)) {
											?>
											<option><?php echo $row['tutor_id'] ; ?></option>
											<?php
										}
										?>
									</select>
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="inputEmail">Batch ID</label>
								<div class="controls">
								   <select name="batch_id" class="span2" onchange="Ajax.init('frm_filter', 'http://localhost/elearning/filtering_tutor_attendance_project.php')" >
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
							
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="">
							
                                <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Attendance Table</strong>
                                </div>
								
                                <thead>
                                    <tr>
                                        
                                        <th>Date</th>
										<th>Tutor ID</th>
										<th>Tutor Name</th>
										<th>Batch ID</th>
										<th>Status</th>
										<th>Action</th>
												
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