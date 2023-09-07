<?php
require_once '../Core/CommandeC.php';
$chart_data=statCommande();
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
<head>
  <title>stat</title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

</head>
<body>
  <br /><br />
  <div class="container" style="width:1360px;">
    <h2 align="center">voici notre statistique</h2>
    <h3 align="center">statistique de prix </h3>
    <br /><br />
    <div id="chart"></div>
  </div>

</body>
</html>

<script>
Morris.Bar({
  element : 'chart',
  data:[<?php echo $chart_data; ?>],
  xkey:'numc',
  ykeys:['modalite', 'prix'],
  labels:['numc', 'prix' ],
  hideHover:'auto',
  stacked:true
});
</script>
