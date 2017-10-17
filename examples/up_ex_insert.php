<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
        header( "refresh:1;url=connect.php" );
      } else {
        mysqli_set_charset($conn,"utf8");
        $fname = "'" .$_POST['fname']. "'";
        $func = "'" .$_POST['func']. "'";
        $email = "'" . $_POST['email'] . "'";
        $pw = "'" . $_POST['senha'] . "'";
        $id = $_GET['id'];
        $ex_id = $_GET['id_ex'];

          $sql = "UPDATE `executor` SET `firstname`=".$fname.",`pw`=".$pw.",`email`=".$email.",`function`=".$func." WHERE `id_ex` = '".$ex_id."'";
            if (mysqli_query($conn, $sql)) {
              $last_id = $conn->insert_id;
                echo "The executor has been updated";
                header( "refresh:3;url=adm.php?id=".$id);
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
                  mysqli_close($conn);

      echo "<p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>" . @mysqli_error($conn);
}
    ?>
  </body>
</html>
