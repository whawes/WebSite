
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
     // console.log(data);
      data2 = JSON.parse(data);
     // console.log(data2);
      var player = [];
      var score = [];

      for(var i in data2) {
        player.push( data2[i].Createur);
        score.push(data2[i].Number);
      }
console.log(player);
      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Nombre de posts',
            backgroundColor: '#a94442',
            borderColor: '#a94442',
            hoverBackgroundColor: '#d15855',
            hoverBorderColor: '#d15855',
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
      //console.log(data);
    }
  });
});
    
    </script>