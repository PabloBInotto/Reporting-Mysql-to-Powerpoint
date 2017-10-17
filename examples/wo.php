<?php
include 'header.php';

        mysqli_set_charset($conn,"utf8");
        $id = $_GET['id'];
        $fname = "";
        $lname = "";
        $email = "";

        $sql = "SELECT * FROM `worker` WHERE `id_wk` = '".$id."'";
        $result = @mysqli_query($conn, $sql);

        if (@mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $fname = $row["firstname"];
                $lname = $row["lastname"];
            }
                echo "
                    <body>
                      <div class='w3-panel'>
                      <h2>Dear ".$fname." ".$lname." welcome to W/O system</h2>
                      </div>
                    <div class='w3-panel w3-card'><p>Enter your request in the field below!<User></p>

                    <form action='wo_register.php?id=".$id."' method='post'>
                      Work order request: <textarea maxlength='200' name='req' class='w3-input w3 w3-gray' placeholder='Escreva sua solicita&ccedil;&atilde;o' required></textarea><br>
                      To: <select class='w3-input w3 w3-gray' name='area'><br>
                          <option value=''>selcione a &aacute;rea</option>
                          <option value='Eletrica'>Eletrica</option>
                          <option value='Mecanica'>Mecanica</option>
                          <option value='Hidraulica'>Hidraulica</option>
                          <option value='Civil'>Civil</option>
                      </select><br>
                      <input type='submit' class='w3-button w3-green w3-right w3-round-xxlarge' value='Register'><br>
                    </form><br>
                    </div>";

        } else {
            echo "User note selected";
        }

        @mysqli_close($conn);

   echo "<p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>" . @mysqli_error($conn);
?>
  </body>
</html>
