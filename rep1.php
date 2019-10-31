<?php include('header_project.php'); ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});

</script>

<?php 
 $month= $_POST['month'];
 ?>

 <script>
var a=<?php 
 $count=0;
$sql_lcd = "SELECT amount
FROM payment
WHERE batch_id = 'math/09/01'
AND month='$month'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$a=$row_lcd['amount'];
$count = $count + 1;
}

$a = 400 * $count;	  
echo $a;?>;

var b=<?php 
 $count=0;
$sql_lcd = "SELECT amount
FROM payment
WHERE batch_id = 'math/10/01'
AND month='$month'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$b=$row_lcd['amount'];
$count = $count + 1;
}

$b = 600 * $count;	  
echo $b;?>;

var c=<?php 
 $count=0;
$sql_lcd = "SELECT amount
FROM payment
WHERE batch_id = 'eng/10/01'
AND month='$month'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$c=$row_lcd['amount'];
$count = $count + 1;
}

$c = 400 * $count;	  
echo $c;?>;

var d=<?php 
 $count=0;
$sql_lcd = "SELECT amount
FROM payment
WHERE batch_id = 'math/10/02'
AND month='$month'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$d=$row_lcd['amount'];
$count = $count + 1;
}

$d = 900 * $count;	  
echo $d;?>;

var e=<?php 
 $count=0;
$sql_lcd = "SELECT amount
FROM payment
WHERE batch_id = 'math/09/02'
AND month='$month'";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$e=$row_lcd['amount'];
$count = $count + 1;
}

$e = 400 * $count;	  
echo $e;?>;


google.setOnLoadCallback(drawChart);

function drawChart() {

  var data = google.visualization.arrayToDataTable([
    ['Batch', 'Income', ],
    ['math/09/01',  a, ],
    ['math/10/01',  b,  ],
    ['eng/10/01',  c,   ],
	['math/10/02',  d,  ],
	['math/09/02',  e,  ],
  ]);

  var options = {
    title: 'Monthly Income for Month of <?php echo $month;?>',
    hAxis: {title: 'Month', titleTextStyle: {color: 'black'}}
  };

  var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

  chart.draw(data, options);

}
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
	<br><br>
	 <a href="reports_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
  </body>
</html>