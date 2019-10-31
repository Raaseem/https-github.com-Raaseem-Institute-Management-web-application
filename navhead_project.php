<div class="row-fluid">
    <div class="span12">
        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                        <div class="pull-right">
                            <form class="navbar-search pull-left">
                                <i class="icon-search icon-large" id="color_white"></i>
                                <input type="text" class="search-query"  placeholder="Search">
                            </form>
                        </div>

                        <!-- end collapse -->
                    </div>
                </div>
            </div>
        </div>
		
        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span6">
                              <!--Kensington Academy -->
							  <img src="admin/images/logo23.png"> 
                            </div>
                            <div class="span6">
                                <div class="pull-right">
                                    <!--- login button -->							
                                    <div class="btn-group">
                                        <button class="btn btn-success"><i class="icon-signin icon-large"></i>&nbsp;Login</button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#student" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Student</a></li>
                                            <li><a href="#teacher" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Teacher</a></li>
											<li><a href="#parent" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Parent</a></li>
											<li><a href="#admin" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Admin</a></li>
											<li><a href="#staff" role="button"  data-toggle="modal"><i class="icon-user icon-large"></i>&nbsp;Staff</a></li>
                                        </ul>
                                    </div>

                                    <!-- end login -->
                                    <?php include('student_modal_project.php'); ?>
									<?php include('teacher_modal_project.php'); ?>
                                    <?php include('parent_modal_project.php'); ?>
									<?php include('admin_modal_project.php'); ?>
									<?php include('staff_modal_project.php'); ?>
							
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>