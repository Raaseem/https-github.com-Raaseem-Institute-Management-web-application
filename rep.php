<?php include('header_project.php'); ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
	  
	 var z=<?php 
 $sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Kalpitiya'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$z=$row_lcd['COUNT( * )'];
}
	  
echo $z;?>; 

 var y=<?php 
 $sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Puttalam'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$y=$row_lcd['COUNT( * )'];
}
	  
echo $y;?>; 

 var x=<?php 
 $sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Anamaduwa'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$x=$row_lcd['COUNT( * )'];
}
	  
echo $x;?>; 

 var p=<?php 
 $sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Chilaw'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$p=$row_lcd['COUNT( * )'];
}
	  
echo $p;?>; 

 var q=<?php 
 $sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Anuradhapura'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$q=$row_lcd['COUNT( * )'];
}
	  
echo $q;?>; 
	 
	 
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['City', 'No of Students'],
          ['Thambala',     z],
          ['MuslimKulani',      y],
          ['Sungavil',  x],
          ['Kaduruwela',  p],
          ['Ottamavedi',  q],
         
        ]);

        var options = {
          title: 'Students Distribution'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  <img src="admin/images/logo2.png" width="500" height="100"/>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
	<br><br>
	 <a href="reports_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	
  </body>
</html>