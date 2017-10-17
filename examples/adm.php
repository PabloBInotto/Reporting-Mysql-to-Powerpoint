<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>

body {
  background: black;
  position: relative;
}

#clock {
  position: absolute;
  top: 1px;
  right: 10px;
  width: 400px;
  height: 400px;
}

#underlay {
  -webkit-filter: blur(4px);
  -moz-filter: blur(4px);
  -ms-filter: blur(4px);
  -o-filter: blur(4px);
  filter: blur(4px);
}

#underlay path,
#underlay circle {
  fill: none;
}

#underlay .lit {
  fill: #0e0;
  stroke: #0e0;
}

#overlay path,
#overlay circle {
  fill: #222;
  stroke: #5f0;
  stroke-opacity: 0;
}

#overlay .lit {
  fill: #0e0;
  stroke-opacity: 1;
}

</style>
<svg viewBox="0 0 375 96" style="position: absolute; top: 1px; right: 50px; width: 120px; height: 68px;">
  <g transform="translate(17,0)">
    <g class="digit" transform="skewX(-12)">
      <path d="M10,8L14,4L42,4L46,8L42,12L14,12L10,8z"/>
      <path d="M8,10L12,14L12,42L8,46L4,42L4,14L8,10z"/>
      <path d="M48,10L52,14L52,42L48,46L44,42L44,14L48,10z"/>
      <path d="M10,48L14,44L42,44L46,48L42,52L14,52L10,48z"/>
      <path d="M8,50L12,54L12,82L8,86L4,82L4,54L8,50z"/>
      <path d="M48,50L52,54L52,82L48,86L44,82L44,54L48,50z"/>
      <path d="M10,88L14,84L42,84L46,88L42,92L14,92L10,88z"/>
    </g>
    <g class="digit" transform="skewX(-12)">
      <path d="M66,8L70,4L98,4L102,8L98,12L70,12L66,8z"/>
      <path d="M64,10L68,14L68,42L64,46L60,42L60,14L64,10z"/>
      <path d="M104,10L108,14L108,42L104,46L100,42L100,14L104,10z"/>
      <path d="M66,48L70,44L98,44L102,48L98,52L70,52L66,48z"/>
      <path d="M64,50L68,54L68,82L64,86L60,82L60,54L64,50z"/>
      <path d="M104,50L108,54L108,82L104,86L100,82L100,54L104,50z"/>
      <path d="M66,88L70,84L98,84L102,88L98,92L70,92L66,88z"/>
    </g>
    <g class="separator">
      <circle r="4" cx="112" cy="28"/>
      <circle r="4" cx="103.5" cy="68"/>
    </g>
    <g class="digit" transform="skewX(-12)">
      <path d="M134,8L138,4L166,4L170,8L166,12L138,12L134,8z"/>
      <path d="M132,10L136,14L136,42L132,46L128,42L128,14L132,10z"/>
      <path d="M172,10L176,14L176,42L172,46L168,42L168,14L172,10z"/>
      <path d="M134,48L138,44L166,44L170,48L166,52L138,52L134,48z"/>
      <path d="M132,50L136,54L136,82L132,86L128,82L128,54L132,50z"/>
      <path d="M172,50L176,54L176,82L172,86L168,82L168,54L172,50z"/>
      <path d="M134,88L138,84L166,84L170,88L166,92L138,92L134,88z"/>
    </g>
    <g class="digit" transform="skewX(-12)">
      <path d="M190,8L194,4L222,4L226,8L222,12L194,12L190,8z"/>
      <path d="M188,10L192,14L192,42L188,46L184,42L184,14L188,10z"/>
      <path d="M228,10L232,14L232,42L228,46L224,42L224,14L228,10z"/>
      <path d="M190,48L194,44L222,44L226,48L222,52L194,52L190,48z"/>
      <path d="M188,50L192,54L192,82L188,86L184,82L184,54L188,50z"/>
      <path d="M228,50L232,54L232,82L228,86L224,82L224,54L228,50z"/>
      <path d="M190,88L194,84L222,84L226,88L222,92L194,92L190,88z"/>
    </g>
    <g class="separator">
      <circle r="4" cx="236" cy="28"/>
      <circle r="4" cx="227.5" cy="68"/>
    </g>
    <g class="digit" transform="skewX(-12)">
      <path d="M258,8L262,4L290,4L294,8L290,12L262,12L258,8z"/>
      <path d="M256,10L260,14L260,42L256,46L252,42L252,14L256,10z"/>
      <path d="M296,10L300,14L300,42L296,46L292,42L292,14L296,10z"/>
      <path d="M258,48L262,44L290,44L294,48L290,52L262,52L258,48z"/>
      <path d="M256,50L260,54L260,82L256,86L252,82L252,54L256,50z"/>
      <path d="M296,50L300,54L300,82L296,86L292,82L292,54L296,50z"/>
      <path d="M258,88L262,84L290,84L294,88L290,92L262,92L258,88z"/>
    </g>
    <g class="digit" transform="skewX(-12)">
      <path d="M314,8L318,4L346,4L350,8L346,12L318,12L314,8z"/>
      <path d="M312,10L316,14L316,42L312,46L308,42L308,14L312,10z"/>
      <path d="M352,10L356,14L356,42L352,46L348,42L348,14L352,10z"/>
      <path d="M314,48L318,44L346,44L350,48L346,52L318,52L314,48z"/>
      <path d="M312,50L316,54L316,82L312,86L308,82L308,54L312,50z"/>
      <path d="M352,50L356,54L356,82L352,86L348,82L348,54L352,50z"/>
      <path d="M314,88L318,84L346,84L350,88L346,92L318,92L314,88z"/>
    </g>
  </g>
</svg>
<script src="//d3js.org/d3.v3.min.js"></script>
<script>

var svgUnderlay = d3.select("svg"),
    svgOverlay = d3.select("body").append(function() { return svgUnderlay.node().cloneNode(true); }),
    svg = d3.selectAll("svg");

svgUnderlay.attr("id", "underlay");
svgOverlay.attr("id", "overlay");

var digit = svg.selectAll(".digit"),
    separator = svg.selectAll(".separator circle");

var digitPattern = [
  [1,0,1,1,0,1,1,1,1,1],
  [1,0,0,0,1,1,1,0,1,1],
  [1,1,1,1,1,0,0,1,1,1],
  [0,0,1,1,1,1,1,0,1,1],
  [1,0,1,0,0,0,1,0,1,0],
  [1,1,0,1,1,1,1,1,1,1],
  [1,0,1,1,0,1,1,0,1,1]
];

(function tick() {
  var now = new Date,
      hours = now.getHours(),
      minutes = now.getMinutes(),
      seconds = now.getSeconds();

  digit = digit.data([hours / 10 | 0, hours % 10, minutes / 10 | 0, minutes % 10, seconds / 10 | 0, seconds % 10]);
  digit.select("path:nth-child(1)").classed("lit", function(d) { return digitPattern[0][d]; });
  digit.select("path:nth-child(2)").classed("lit", function(d) { return digitPattern[1][d]; });
  digit.select("path:nth-child(3)").classed("lit", function(d) { return digitPattern[2][d]; });
  digit.select("path:nth-child(4)").classed("lit", function(d) { return digitPattern[3][d]; });
  digit.select("path:nth-child(5)").classed("lit", function(d) { return digitPattern[4][d]; });
  digit.select("path:nth-child(6)").classed("lit", function(d) { return digitPattern[5][d]; });
  digit.select("path:nth-child(7)").classed("lit", function(d) { return digitPattern[6][d]; });
  separator.classed("lit", seconds & 1);

  setTimeout(tick, 1000 - now % 1000);
})();

</script>

</head>

    <?php
    $str = file_get_contents('http://localhost/pptx.js/examples/connect.json');
    $json = json_decode($str, true); // decode the JSON into an associative array

    $servername = $json['host'];
    $username = $json['username'];
    $password = $json['password'];
    $db = $json['db'];

    // Create connection
$conn = @mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
        echo "Error to connect the mysql, wait 5 seconds please";
        header( "refresh:1;url=index.php" );
      } else {

        $id = $_GET['id'];
        $adm = '';
        $t=time();
        $ex_date =(date("Y-m-d H:i:s",$t));
          @mysqli_set_charset($conn,"utf8");
          $sql = "SELECT * FROM `executor` WHERE `pass` = '".$id."' ";
          $result = @mysqli_query($conn, $sql);
          if (@mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  $adm = $row["firstname"];
              }
              echo "
            <div class='w3-container w3-cell-middle w3-black'>
            <div class='w3-container w3-cell'>
              <svg id='clock'><svg>
            </div>
              <div class='w3-container w3-cell'>
                 <h1>Wellcome " . $adm . "</h1>

              </div>

              <div class='w3-container w3-cell-middle w3-cell w3-black '>
              <a href='index.php' class='w3-bar-item w3-button'>Home</a>
              </div>
              ";


            }
            // executors management
            echo "
              <div class='w3-container w3-cell-middle w3-cell w3-black '>


                <div class='w3-dropdown-hover w3-black' style='width:100; height:100; z-index:3; overflow: auto'>
                  <button class='w3-button'>Executors management</button>
                  <div class='w3-dropdown-content w3-bar-block w3-card-4 w3-black'>
                ";

                $sql = "SELECT * FROM `executor`";
                $result = @mysqli_query($conn, $sql);

                if (@mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = @mysqli_fetch_assoc($result)) {
                        echo "<a href='up_register_ex.php?id=".$id."&ex_id=". $row['id_ex']."' class='w3-bar-item w3-button'>". $row['firstname']."</a>";
                    }
                } else {
                    echo "<a href='' class='w3-bar-item w3-button'>Not executors found</a>";
                }

                  // Clients management
                echo "

                </div>
              </div>
              </div>

              <div class='w3-container w3-cell-middle w3-cell w3-black '>

                <div class='w3-dropdown-hover w3-black' style='width:100; height:100; z-index:3; overflow: auto'>
                  <button class='w3-button'>Clients management</button>
                  <div class='w3-dropdown-content w3-bar-block w3-card-4 w3-black'>
                ";

                $sql = "SELECT * FROM `worker`";
                $result = @mysqli_query($conn, $sql);

                if (@mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = @mysqli_fetch_assoc($result)) {
                        echo "<a href='up_user.php?id=".$id."&wk_id=". $row['id_wk']."' class='w3-bar-item w3-button'>". $row['firstname']."</a>";
                    }
                } else {
                    echo "<a href='' class='w3-bar-item w3-button'>Not Clients registred</a>";
                }

                echo "

                </div>
              </div>
              </div>


            </div>

            </div>";


      }
echo "<div class='w3-container w3-cell w3-black'>
        <div class='w3-black' id='donutchart' style='width: 400px; height: 300px;'></div>
      </div>
        <div class='w3-container w3-cell'>
                      <p>ToDoList <input class='w3-button w3-border w3-border-green w3-round-large w3-black' type='button' value='Print this page' onclick='printPage()' /> </p>
                      <table class='w3-table w3-bordered'>
                      <tr>
                      <th></th>
                        <th>W/O</th>
                        <th>Area</th>
                        <th>Aberta em</th>
                        <th>Status</th>
                        <th>Decrição</th>
                        <th>Cliente</th>
                        <th>E-mail</th>
                      </tr>";
                      mysqli_set_charset($conn,"utf8");
                      $sql = "SELECT * FROM orede_by_worker where `status` <> 'Closed' and `status` <> 'Cancelled'";
                        $result = mysqli_query($conn, $sql);
                          if(@mysqli_num_rows($result) > 0){
                            while ($row = @mysqli_fetch_assoc($result)) {
                            echo "
                              <tr>";?>
                                <td>
                                  <div class="w3-container">
                                    <button onclick="document.getElementById('id0<?php echo $row['id_wo']; ?>').style.display='block'" class="w3-button w3-border w3-border-green w3-round-large w3-black">UPDATE</button>

                                    <div id="id0<?php echo $row['id_wo']; ?>" class="w3-modal">
                                      <div class="w3-modal-content">
                                        <header class="w3-container w3-teal">
                                          <span onclick="document.getElementById('id0<?php echo $row['id_wo']; ?>').style.display='none'"
                                          class="w3-button w3-display-topright">&times;</span>
                                          <h2>WO System - Update order <?php echo $row['id_wo']; ?></h2>
                                        </header>
                                        <form class="form-horizontal" role="form" method="post" action="adm_wo_execution.php?wo_id=<?php echo $row['id_wo']; ?>&ex_id=1">
                                                <div class="modal-body">
                                                  Staus: <select class='w3-input w3 w3-gray' name='status' id='status'><br>
                                                      <option value=''>selcione </option>
                                                      <option value='Closed'>Closed</option>
                                                      <option value='Doing'>Doing</option>
                                                      <option value='Cancelled'>Cancelled</option>
                                                      <option value='Wait'>Waiting</option>
                                                  </select><br>
                                                  Custo: <input type="number" name="cost" id='custo'>
                                                  Obs.: <input type="text" name="detail" id='detail'>
                                                  <button type="submit" class="btn btn-default" data-dismiss="modal">OK</button>
                                                </div>
                                        </form>
                                        <footer class="w3-container w3-teal">
                                          <p>Update WO</p>
                                        </footer>
                                      </div>
                                    </div>
                                    </div>
                                </td>
                            <?php
                            echo "<td>".$row['id_wo']."</td>
                                  <td>".$row['area']."</td>
                                  <td>".$row['wo_date']."</td>
                                  <td>".$row['status']."</td>
                                  <td>".$row['oreder']."</td>
                                  <td>".$row['firstname']."</td>
                                  <td>".$row['email']."</td>
                              </tr>
                          ";
                            }
                          }
                  echo "</table>
                          </div>";

      ?>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Status', 'Qty'],
      <?php
        $sql = "SELECT count(`qty`) as 'qty', `status` FROM `wo_status` group by `status` ";
        $result = @mysqli_query($conn, $sql);
        if (@mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "['".$row["status"]."', ".$row["qty"]."],";
            }
        }
      ?>
      ]);

      var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
      chart.draw(data, {
        title: 'W/O status',
        legendTextStyle: { color: '#00b300' },
        textStyle: { color: "#00b300"},
        titleTextStyle: { color: '#00b300' },
        pieHole: 0.3,
        backgroundColor: '#000000',
        colors: ['#cc0052','#00cc00','#cc6600', '#0066cc']
      });
      }
      </script>

      <script>
      function printPage() {
      window.print();
      }
      </script>
      <?php
      @mysqli_close($conn);
      ?>


    </body>
    </html>
