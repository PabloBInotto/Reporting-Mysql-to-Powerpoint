﻿
    <?php
    include 'header.php';
        mysqli_set_charset($conn,"utf8");
        $user = $_POST['user'];
        $pw = $_POST['pw'];

        $pass = time();

        $sql = "SELECT * FROM `executor` where `firstname` = '".$user."' ";
          $result = @mysqli_query($conn, $sql);

          if (@mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)){
                echo $row['firstname'];
                if ($row['pw'] == $pw){
                  $sql = "UPDATE `executor` SET `pass`='".$pass."' WHERE `id_ex` = '".$row['id_ex']."'";
                    if (mysqli_query($conn, $sql)) {
                        echo "Waiting";
                        header( "refresh:2;url=adm.php?id=" . $pass);
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                } else {
                  echo "<h1>Wrong password. back and try again</h1>";
                  header( "refresh:5;url=http://localhost/pptx.js/examples/" );
                }
              }
          } else {
              echo "Error: User not found" . $sql . "<br>" . mysqli_error($conn);
          }
@mysqli_close($conn);

      echo "<p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>";
    ?>


  </body>
</html>
