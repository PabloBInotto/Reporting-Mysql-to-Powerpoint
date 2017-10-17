<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>
    <div class="w3-panel w3-yellow">
    <h2>Connect PHP with MYSQL page</h2>
  </div>


    <?php
    $str = file_get_contents('http://localhost/pptx.js/examples/connect.json');
    $json = json_decode($str, true); // decode the JSON into an associative array

    $servername = $json['host'];
    $username = $json['username'];
    $password = $json['password'];
    $db = $json['db'];


    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "<p style='background-color: green'>Database connected.... . . . <p><br>";

    // sql to create executor
    $sql = "CREATE TABLE IF NOT EXISTS executor (
      id_ex int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
      firstname varchar(30) CHARACTER SET latin1 NOT NULL,
      pw varchar(30) CHARACTER SET latin1 NOT NULL,
      email varchar(50) CHARACTER SET latin1 DEFAULT NULL,
      function VARCHAR(10) CHARACTER SET latin1 DEFAULT NULL,
      level VARCHAR(10) CHARACTER SET latin1 DEFAULT NULL,
      reg_date timestamp NULL DEFAULT CURRENT_TIMESTAMP,
      KEY (id_ex)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;";

    if ($conn->query($sql) === TRUE) {
        echo "Table executor created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS worker (
      id_wk int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
      firstname varchar(30) CHARACTER SET latin1 NOT NULL,
      lastname varchar(30) CHARACTER SET latin1 NOT NULL,
      email varchar(50) CHARACTER SET latin1 DEFAULT NULL,
      reg_date timestamp NULL DEFAULT CURRENT_TIMESTAMP,
      KEY (id_wk)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8;";

    if ($conn->query($sql) === TRUE) {
        echo "Table worker created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // sql to create table
    $sql = "CREATE TABLE  IF NOT EXISTS work_order (
      id_wo int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
      oreder varchar(200) COLLATE latin1_general_ci NOT NULL,
      req_id int(11) NOT NULL,
      details varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
      area varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
      custo decimal(50,0) COLLATE latin1_general_ci DEFAULT NULL,
      status varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT 'opened',
      wo_date timestamp NULL DEFAULT CURRENT_TIMESTAMP,
      ex_date datetime DEFAULT NULL,
      ex_id int(6) DEFAULT NULL,
      KEY (id_wo)
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;";

    if ($conn->query($sql) === TRUE) {
        echo "Table work_order created successfully<br>";

    } else {
        echo "Error creating table: " . $conn->error;
    }


    $sql1 = "CREATE OR REPLACE VIEW `orede_by_worker`  AS
      select `work_order`.`id_wo` AS `id_wo`,
      `work_order`.`oreder` AS `oreder`,
      `work_order`.`area` AS `area`,
      `work_order`.`req_id` AS `req_id`,
      `work_order`.`details` AS `details`,
      `work_order`.`custo` AS `custo`,
      `work_order`.`status` AS `status`,
      `work_order`.`wo_date` AS `wo_date`,
      `work_order`.`ex_date` AS `ex_date`,
      `work_order`.`ex_id` AS `ex_id`,
      `worker`.`id_wk` AS `id_wk`,
      `worker`.`firstname` AS `firstname`,
      `worker`.`lastname` AS `lastname`,
      `worker`.`email` AS `email`,`worker`.
      `reg_date` AS `reg_date`
      from `work_order` left join `worker`
      on`worker`.`id_wk` = `work_order`.`req_id`";
      if ($conn->query($sql1) === TRUE) {
          echo "View orede_by_worker created successfully<br>";
        } else {
            echo "Error creating view orede_by_worker: " . $conn->error;
        }

      $sql2 = "CREATE OR REPLACE VIEW `wo_status`  AS
        select count(`work_order`.`area`) AS `qty`,
        `work_order`.`area` AS `area`,
        `work_order`.`status` AS `status`
        from `work_order`
        group by `work_order`.`area`,`work_order`.`status`";

        if ($conn->query($sql2) === TRUE) {
            echo "View orede_by_worker created successfully<br>";
          } else {
              echo "Error creating view orede_by_worker: " . $conn->error;
          }


          $sql3 = "INSERT INTO `executor` (`firstname`, `pw`, `email`, `function`, `level`) VALUES
          ('ADM', 'adm', 'adm@pptx.com', 'adm', 'adm')";

            if ($conn->query($sql3) === TRUE) {
                echo "ADM user inserted - User: ADM, PW: adm<br>";
              } else {
                  echo "Error to insert the ADM user: " . $conn->error;
              }

    $conn->close();
      header( "refresh:5;url=index.php" );

    ?>

  </body>
</html>
