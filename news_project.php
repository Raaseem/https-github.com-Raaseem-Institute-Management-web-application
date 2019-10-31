<?php
include('header_project.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>

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

    <?php include('navhead_project.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
			
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
				
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">

                        <li class="nav-header">Links</li>
						
                        <li>
							<a href="index_project.php"><i class="icon-home icon-large"></i>&nbsp;Home
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
								</div>
							</a>
						</li>

                        <li>
							<a href="sitemap_project.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div>
							</a>
						</li>
								
                        <li>
							<a href="contact_project.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div>
							</a>
						</li>
                      
                        <li>
							<a href="about_project.php"><i class="icon-list-alt icon-large"></i>&nbsp;About Us
                                <div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
						
						<li>
							<a href="timtable_project.php"><i class="icon-calendar icon-large"></i>&nbsp;TimeTable                               
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>
						</li>
							
						<li class="active">
							<a href="news_project.php"><i class="icon-comment icon-large"></i>&nbsp;News                            
								<div class="pull-right">
                                   <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>
						</li>
												
                    </ul>
                </div>

            </div>
			
			<div class="span9">
				<div class="hero-unit-3">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Events</strong>
                </div>
				
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
				
				 <thead>
                                    <tr>
                                        
                                        <th>Event Title</th>
										<th>Event Date</th>
										<th>Time</th>
										<th>Location</th>
										<th>Description</th>
										
                                    </tr>
                                </thead>
								
                                <tbody>
                                    <?php
                                    $query = mysql_query("select * from event") or die(mysql_error());
                                    while ($row = mysql_fetch_array($query)) {
                                        $event_id = $row['event_id'];
                                        ?>

                                    <tr class="odd gradeX">
                                    
                                        <td><?php echo $row['title']; ?></td> 
                                        <td><?php echo $row['event_date']; ?></td>
										<td><?php echo $row['time']; ?></td> 
										<td><?php echo $row['location']; ?></td> 
										<td><?php echo $row['description']; ?></td>

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