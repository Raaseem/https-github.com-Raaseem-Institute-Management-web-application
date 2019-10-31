<?php include('header_project.php'); ?>
<?php include('connect_project.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
   <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Oxford College Kalmunai
    </title> -->
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>

<?php
 $stu_id= $_POST['stu_id'];
 $batch_id1= $_POST['batch_id1'];
 $batch_id2= $_POST['batch_id2'];
 $batch_id3= $_POST['batch_id3'];
 $test_no= $_POST['test_no'];
 $month= $_POST['month'];
 
?>	
	<script>	  
var x=<?php 
 $sql_lcd = "SELECT mark
FROM class_test
WHERE stu_id= '$stu_id'
AND batch_id='$batch_id1'
AND class_test_no='$test_no'
AND month='$month'
";

$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$var=$row_lcd['mark'];
}
	  
echo $var;?>;

 var y=<?php 
 $sql_lcd = "SELECT mark
FROM class_test
WHERE stu_id = '$stu_id'
and batch_id='$batch_id2'
AND class_test_no='$test_no'
AND month='$month'
";
$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$y=$row_lcd['mark'];
}
	  
echo $y;?>;

var z=<?php 
 $sql_lcd = "SELECT mark
FROM class_test
WHERE stu_id = '$stu_id'
and batch_id='$batch_id3'
AND class_test_no='$test_no'
AND month='$month'
";
$result_lcd = mysql_query($sql_lcd);
while ($row_lcd = mysql_fetch_array($result_lcd)) {

$z=$row_lcd['mark'];
}
	  
echo $z;?>;

 	</script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['<?php echo $stu_id;?>', '<?php echo $batch_id1;?>', '<?php echo $batch_id2;?>', '<?php echo $batch_id3; ?>'],
          ['',  x,    y,  z ],
          
         
        ]);
      
        // Create and draw the visualization.
        new google.visualization.BarChart(document.getElementById('visualization')).
            draw(data,
                 {title:"Class Test Mark For Test No <?php echo $test_no;?> Month Of <?php echo $month;?>",
                  width:600, height:400,
                  vAxis: {title: "Batch"},
                  hAxis: {title: "Mark"}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 600px; height: 400px;"></div>
	<br><br>
	 <a href="monthly_test_mark_par1_project.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
	
  </body>
</html>