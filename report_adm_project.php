<?php include('header_project.php'); ?>
 <?php include('connect_project.php'); ?>
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="jsapi.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
	  
	  
function drawChart() {
	  
 var x=<?php 
 
$sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Kalmunai'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$x=$row_lcd['COUNT( * )'];
}
	  
echo $x;?>;

 var y=<?php 
 
$sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'KoddaiKallar'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$y=$row_lcd['COUNT( * )'];
}
	  
echo $y;?>;

 var z=<?php 
 
$sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Karaitivu'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$z=$row_lcd['COUNT( * )'];
}
	  
echo $z;?>;


 var a=<?php 
 
$sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Periya Kallar'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$a=$row_lcd['COUNT( * )'];
}
	  
echo $a;?>;


var b=<?php 

$sql_lcd = "SELECT COUNT( * )
FROM student
WHERE city = 'Kaluwanchi Kudy'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$b=$row_lcd['COUNT( * )'];
}
	  
echo $b;?>;

 
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Kalmunai', x],  ['KoddaiKallar', y], ['Karaitivu', z], ['Periya Kallar', a], 
              
        ]);

        // Set chart options
        var options = {'title':' Students Distribution ',
                       'width':500,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>
