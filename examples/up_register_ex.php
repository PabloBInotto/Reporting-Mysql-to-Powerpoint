<?php include 'header.php';
echo "</div>
<div class='w3-panel w3-card w3-write'>
  <br><p>Register executor section <User></p>";
$id = $_GET['id'];
$ex_id = $_GET['ex_id'];
$sql = "SELECT * FROM `executor` where id_ex = '".$ex_id."'";
$result = @mysqli_query($conn, $sql);
if (@mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {


        echo "
        <form action='up_ex_insert.php?id=".$id."&id_ex=".$ex_id."' method='post'>
          User name: <input class='w3-input w3 w3-gray' type='text' name='fname' value='".$row['firstname']."' required><br>
          E-mail: <input class='w3-input w3 w3-gray' type='text' name='email' value='".$row['email']."' required><br>
          Function: <select class='w3-input w3 w3-gray' name='func'><br>
              <option value='".$row['function']."'>".$row['function']."</option>
              <option value='Eletrica'>Eletrica</option>
              <option value='Mecanica'>Mecanica</option>
              <option value='Hidraulica'>Hidraulica</option>
              <option value='Civil'>Civil</option>
              <option value='adm'>ADM</option>
          </select><br>
          PassWord: <input class='w3-input w3-gray' type='password' name='senha' value='".$row['pw']."' required><br>
          <input type='submit' class='w3-button w3-green w3-right w3-round-xxlarge' value='Update'><br><br>
        </form><br><hr>

";
}
}

?>
      </div>

    <p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>
  </body>
</html>
