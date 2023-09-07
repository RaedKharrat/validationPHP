<div align="center">


       <?php  
 $connect = mysqli_connect("localhost", "root","","employe");  
 $query = "SELECT ville, count(*) as number FROM livraison GROUP BY ville";  
 $result = mysqli_query($connect, $query);  
 ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['ville', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["ville"]."', ".$row["number"]."],";  
                          }  
                          ?>  
        ]);

        var options = {
          title: 'Product validity'
        };

        var chart = new google.visualization.BarChart(document.getElementById('bar'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="bar" style="width: 900px; height: 500px;"></div>
  </body>
</html>



             <!-- /. PAGE INNER  -->
            </div>