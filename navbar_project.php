<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a> 
        </div>
    </div>
</div>

<div class="hero-unit-header">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">


                <div class="row-fluid">
                    <div class="span6">
                        <img src="admin/images/logo23.png">
                    </div>
                    <div class="span6">

                        <div class="pull-right">
                            <i class="icon-calendar icon-large"></i>
                            <?php
                            $Today = date('y:m:d');
                            $new = date('l, F d, Y', strtotime($Today));
                            echo $new;
                            ?>
                            <br><br>
							
                            <?php 
							//$user_query=mysql_query("select * from login where user_id='$session_id'")or die(mysql_error());
                            //$row=  mysql_fetch_array($user_query); 
						
                            $u_id = $_SESSION ['fname'];
                            ?> 
							
                            <a href="" class="btn btn-info">Welcome:<i class="icon-user icon-large"></i>&nbsp; <?php echo $u_id;  ?></a>
							
							 <div class="btn-group">
                                       
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
										
                                        <ul class="dropdown-menu">
                                            <li><a href="#logout" role="button"  data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                                        </ul>
							
                             </div>

                                    <?php include('logout_modal_project.php') ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>