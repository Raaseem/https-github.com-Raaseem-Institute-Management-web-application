<?php
include('header_project.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
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
                        <li><a href="index_project.php"><i class="icon-home icon-large"></i>&nbsp;Home
						<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> </a></li>

                        <li><a href="sitemap_project.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
						<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> </a></li>
								
                        <li><a href="contact_project.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
						<div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> </a></li>
                      
                        <li  class="active"><a href="about_project.php"><i class="icon-list-alt icon-large"></i>&nbsp;About Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
						
						<li><a href="timtable_project.php"><i class="icon-calendar icon-large"></i>&nbsp;TimeTable                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="news_project.php"><i class="icon-comment icon-large"></i>&nbsp;News                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							
					
                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>About Us</strong>
                </div>


                <p>
                <div class="hero-unit-2">
				Mac Academy is a leading institute in Thambala city registered under the divisional secretariat. 
				There are about 400 students currently who are benefiting from the institution and aiming themselves to enter 
				to universities and to lead a bright future. There are about 15 teachers who are supporting the students to 
				achieve their goals objectives and who stands with them in every important situations of the students life. 
				The management also works hard to improve the students performance and make them a worthy citizen to the country.
				Mac Academy is proud to have the only e-learning system in Thambala city which enhance the performance 
				of students and reduce the gap between the students and tutors meanwhile let parents also to join with their students 
				activities toward the higher education...

                    </div>
                </p>


            </div>

        </div>
        <?php include('footer_project.php'); ?> 
    </div>
</div>
</div>






</body>
</html>


