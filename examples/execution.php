<?php
include 'header.php';
        mysqli_set_charset($conn,"utf8");
        $id = $_GET['id'];
        $fname = "";
        $lname = "";
        $email = "";

        $sql = "SELECT * FROM `executor` WHERE `id_ex` = '".$id."' ";
        $result = @mysqli_query($conn, $sql);
        if (@mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $fname = $row["firstname"];
                $area = $row["function"];
            }
                echo "    <body>
                      <div class='w3-panel w3-green'>
                      <h4>Dear ".$fname."  welcome to W/O system. See below the list of Orders open for you. Have a good job!</h4>
                      </div>";
?>
                      <div class='w3-container w3-cell'>
                        <div id='donutchart' style='width: 400px; height: 300px;'></div>
                      </div>
                <?php    echo "
                      <div class='w3-container w3-cell'>
                        <p>". $area. " ToDoList <input class='w3-button w3-white w3-border w3-border-green w3-round-large' type='button' value='Print this page' onclick='printPage()' /> </p>
                        <table class='w3-table w3-bordered'>
                        <tr>
                        <th></th>
                          <th>W/O</th>
                          <th>Aberta em</th>
                          <th>Status</th>
                          <th>Decrição</th>
                          <th>Cliente</th>
                          <th>E-mail</th>
                        </tr>";

                        $sql = "SELECT * FROM orede_by_worker where `status` <> 'Closed' and `status` <> 'Cancelled' and area = '". $area . "'";
                          $result = mysqli_query($conn, $sql);
                            if(@mysqli_num_rows($result) > 0){
                              while ($row = @mysqli_fetch_assoc($result)) {
                              echo "
                                <tr>";?>
                                  <td>
                                    <div class="w3-container">
                                      <button onclick="document.getElementById('id0<?php echo $row['id_wo']; ?>').style.display='block'" class="w3-btn w3-white w3-border w3-border-blue w3-round-large">UPDATE</button>

                                      <div id="id0<?php echo $row['id_wo']; ?>" class="w3-modal">
                                        <div class="w3-modal-content">
                                          <header class="w3-container w3-teal">
                                            <span onclick="document.getElementById('id0<?php echo $row['id_wo']; ?>').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                            <h2>WO System - Update order <?php echo $row['id_wo']; ?></h2>
                                          </header>
                                          <form class="form-horizontal" role="form" method="post" action="wo_execution.php?wo_id=<?php echo $row['id_wo']; ?>&ex_id=<?php echo $id;?>">
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
        } else {
            echo "User note selected";
        }
    ?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Status', 'Qty'],
        <?php
          $sql = "SELECT * FROM `wo_status` WHERE `area` = '".$area."' ";
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
          pieHole: 0.3,
          colors: ['#ffff99', '#99ff99', '#cc99ff', '#9999ff', '#ffb399']
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
echo "<p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>" . @mysqli_error($conn);
?>
  </body>
</html>
