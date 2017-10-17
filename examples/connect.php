<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>
  <div class="w3-panel w3-yellow">
    <h2>Connect PHP with MYSQL page</h2>
  </div>

    <?php
    $s = $_GET['s'];
    if ($s != 1){
      echo "You arent connected. Please wait";
      header( "refresh:1;url=http://localhost/pptx.js/login/" );
    } else {
    $str = file_get_contents('http://localhost/pptx.js/examples/connect.json');
    $json = json_decode($str, true); // decode the JSON into an associative array

    $servername = $json['host'];
    $username = $json['username'];
    $password = $json['password'];
    $db = $json['db'];
@mysqli_set_charset($conn,"utf8");
    // Create connection
$conn = @mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
        echo "
        <div class='w3-container'><p>The MYSQL DB are not connected</p>
        <p>To change the data connection, fill the fields below and click test connection:</p>
        <form action='update_json_connect_file.php' method='post'>
          Host name: <input class='w3-input' type='text' name='host' placeholder='".$servername."' required><br>
          User name: <input class='w3-input' type='text' name='user' placeholder='".$username."' required><br>
          Pass_word: <input class='w3-input' type='password' name='pw' placeholder='".$password."' required><br>
          Database: <input class='w3-input' type='text' name='db' placeholder='".$db."' required><br>
          <input type='submit' value='Test connection'>
        </form>
        </div>";
      }
      // Create database
      $sql = "CREATE DATABASE IF NOT EXISTS ".$db;
      if (@mysqli_query($conn, $sql)) {
          echo "Database created successfully";
            header( "refresh:5;url=create_tabels.php" );
      } else {
          echo "<p>Status: <span class='w3-tag w3-orange'> Not connected! </span></p>" . @mysqli_error($conn);
      }
      @mysqli_close($conn);
    }
    ?>
  </body>
</html>
