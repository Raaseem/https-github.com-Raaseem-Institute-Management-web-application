<!--
You are free to copy and use this sample in accordance with the terms of the
Apache license (http://www.apache.org/licenses/LICENSE-2.0.html)
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {packages: ['corechart']});
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['month', 'SUBA TRAVELS', 'AVAIRO TRAVELS', 'ESWARAN TRAVELS', 'BRENTHA TRAVELS', 'G.S Gunasegara', 'NCG TRAVELS'],
          ['Jan',  1360,   3817,       9740,       1104,   6651,  1572],
          ['Feb',  1381,   3968,       9288,       1151,   5940,  1735],
          ['Mar',  1765,   4063,       1063,      1156,   5714,  1671],
          ['Apr',  1006,   4604,       940,       1167,   6190,  1454],
          ['May',  1681,   4013,       1037,      1207,   6420,  1556],
          ['Jun',  1010,   6792,       1037,      1284,   6240,  1683]
		  
        ]);
      
        // Create and draw the visualization.
        new google.visualization.ColumnChart(document.getElementById('visualization')).
            draw(data,
                 {title:"Monthly All Bus Rating Report Lanka bus.lk",
                  width:600, height:400,
                  hAxis: {title: "Year"}}
            );
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
    <div id="visualization" style="width: 600px; height: 400px;"></div>
  </body>
</html>
​