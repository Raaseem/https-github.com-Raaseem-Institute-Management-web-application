<div class="navbar navbar-fixed-top navbar-inverse">
    <div class="navbar-inner">
        <div class="container">

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
                        <img src="admin/images/logo2.png">
                    </div>
                    <div class="span6">

                        <div class="pull-right">
                            <i class="icon-calendar icon-large"></i>
                            <?php
                            $Today = date('y:m:d');
                            $new = date('l, F d, Y', strtotime($Today));
                            echo $new;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>