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
        $status = $_POST['status'];
        $cuto = $_POST['cost'];
        $obs = $_POST['detail'];
        $ex_id = $_GET['ex_id'];
        $wo_id = $_GET['wo_id'];
        $t=time();
        $ex_date =(date("Y-m-d H:i:s",$t));


          $sql = "UPDATE `work_order` SET `details`='".$obs."',`custo`='".$cuto."',`status`='".$status."',`ex_date`='".$ex_date."',`ex_id`='".$ex_id."' WHERE `id_wo` = '".$wo_id."'";
            if (mysqli_query($conn, $sql)) {

                echo "Update successful";
                header( "refresh:3;url=execution.php?id=" . $ex_id);
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
                  mysqli_close($conn);

      echo "<p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>" . @mysqli_error($conn);
}
    ?>
  </body>
</html>
