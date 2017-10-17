<?php include 'header.php';
$wk_id = $_GET['wk_id'];
$id = $_GET['id'];
echo "<div class='w3-panel w3-card w3-write'><p>Please regist or if you are registred select your user name at top menu <User></p>
        <form action='up_register.php?wk_id=".$wk_id."&id=".$id."' method='post'>";

$sql = "SELECT * FROM `worker` WHERE `id_wk` = '".$wk_id."' ";
$result = @mysqli_query($conn, $sql);
if (@mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "First name: <input class='w3-input w3-white' type='text' name='fname' value='".$row['firstname']."' required><br>
      Last name: <input class='w3-input w3-white' type='text' name='lname' value='".$row['lastname']."' required><br>
      E-mail: <input class='w3-input w3-white' type='text' name='email' value='".$row['email']."' required><br>
      <input type='submit' class='w3-button w3-green w3-right w3-round-xxlarge' value='Update'><br><br>";
    }
}

echo "</form><br>
    </div>";
?>






      <p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>

  </body>
</html>
