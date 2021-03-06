<?php
include('header_project.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navbar_project.php'); ?>

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
						
							<li class="active"><a href="#"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="staff_stf_project.php"><i class="icon-user-md icon-large"></i>&nbsp;Profile
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="subject_stf_project.php"><i class="icon-book icon-large"></i>&nbsp;Subjects                             
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="class_stf_project.php"><i class="icon-book icon-large"></i>&nbsp;Lecture Halls
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                       
							<li><a href="parent_stf_project.php"><i class="icon-user icon-large"></i>&nbsp;Parents                               
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="student_stf_project.php"><i class="icon-group icon-large"></i>&nbsp;Students                              
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="payment_stf_project.php"><i class="icon-credit-card icon-large"></i>&nbsp;Payments Students                               
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="tutor_stf_project.php"><i class="icon-user icon-large"></i>&nbsp;Tutors                             
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="tutor_attendance_stf_project.php"><i class="icon-check icon-large"></i>&nbsp;Tutors Attendance                            
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="message_stf_project.php"><i class="icon-save icon-large"></i>&nbsp;Messages                           
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
						
							<li><a href="timetable_stf_project.php"><i class="icon-calendar icon-large"></i>&nbsp;Time Table                          
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="event_stf_project.php"><i class="icon-comment icon-large"></i>&nbsp;Events
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
						
							<li><a href="reports_stf_project.php"><i class="icon-file icon-large"></i>&nbsp;Reports                          
								<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>							
							
                    </ul>
                </div>
                <br>

            </div>
            <div class="span9">
                <section class="main">
                    <div class="custom-calendar-wrap">
                        <div id="custom-inner" class="custom-inner">
                            <div class="custom-header clearfix">
                                <nav>
                                    <span id="custom-prev" class="custom-prev"></span>
                                    <span id="custom-next" class="custom-next"></span>
                                </nav>
                                <h2 id="custom-month" class="custom-month"></h2>
                                <h3 id="custom-year" class="custom-year"></h3>
                            </div>
                            <div id="calendar" class="fc-calendar-container"></div>
                        </div>
                    </div>
                </section>

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Welcome to Kensington Academy.
                </div>
                <div class="slider-wrapper theme-default">
                <?php include('slider_stf_project.php'); ?>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->
    <div class="container">

        <div class="row-fluid">
            <div class="span12">
             
            </div>
        </div>

        <?php include('footer_project.php'); ?>
</div> 
</div>
</div>

</body>
</html>