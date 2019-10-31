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
                                </div> 
                            </a></li>

                        <li class="active"><a href="sitemap_project.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="contact_project.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
						<li><a href="about_project.php"><i class="icon-list-alt icon-large"></i>&nbsp;About                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
						<li><a href="timtable_project.php"><i class="icon-calendar icon-large"></i>&nbsp;TimeTable                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
							
							<li><a href="news_project.php"><i class="icon-comment icon-large"></i>&nbsp;News                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
						
							
                    <!--    <li class="nav-header">About US</li>
                        <li><a  href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li> -->

                    </ul>
                </div>

            </div>

            <div class="span9">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Head Up!</strong>&nbsp;Welcome to Mac Academy.
                </div>


               
		<!-- Embedded Google Map -->		
 <!--
 <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:390px;width:860px;"><div id="gmap_canvas" style="height:390px;width:860px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(7.411817200000001,81.83445929999993),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(8.232759,79.761614)});infowindow = new google.maps.InfoWindow({content:"<b>Kensington Academy</b><br/>main Road<br/> Kalpitiya" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>  -->
 
                    
						 
				 <!--  <p><iframe width="860" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto" -->
                           <!-- src="http://maps.google.com/maps/ms?doflg=ptm&amp;ie=UTF8&amp;msa=0&amp;msid=203722259750162261795.0004aafd513ccced356f4&amp;sll=10.743085,122.969515&amp;sspn=0,0&amp;ll=10.743346,122.969686&amp;spn=0,0&amp;t=h&amp;vpsrc=0&amp;output=embed"> -->
                             

						<!--	  </iframe></p> -->

                         <div id="map" style="width:100%;height:500px"></div>
 
 <script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(8.232759,79.761614); 
  var mapOptions = {center: myCenter, zoom: 17};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0YtWjGUh0Degk-RO9sOZGRTRJphgIHV0&callback=myMap"></script>



            </div>

        </div>
        <?php include('footer_project.php'); ?>
    </div>
</div>
</div>






</body>
</html>


