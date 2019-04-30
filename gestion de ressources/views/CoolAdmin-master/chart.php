
<!DOCTYPE html>
<html>
  <head>
    <title>ChartJS - BarGraph</title>
    <style type="text/css">
      #chart-container {
        width: 640px;
        height: auto;
      }
    </style>
  </head>
  <body>
    <div id="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>

    <!-- javascript -->
    <script type="text/javascript" src="vendor/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
  $.ajax({
    url: "data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      data2 = JSON.parse(data);
      console.log(data2);
      var player = [];
      var score = [];

      for(var i in data2) {
        player.push( data2[i].nomMaison);
        score.push(data2[i].nb_Vente);
      }
console.log(player);
      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Nombre de vente',
            backgroundColor: 'rgba(200, 200, 200, 0.75)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});
    
    </script>
  </body>
</html>