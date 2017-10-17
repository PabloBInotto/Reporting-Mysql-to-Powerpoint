<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <body>
    <div class="w3-panel w3-yellow">
    <p>Trying to connect to mysql db!</p>
    <p>waiting 5 seconds</p>
  </div>
      <?php
        $jsonString = file_get_contents('connect.json'); // get josn content
        $data = json_decode($jsonString, true); // decode json data



        foreach ($data as $key => $entry) { // save data for each index of json file
                $data['host'] = $_POST['host'];
                $data['username'] = $_POST['user'];
                $data['password'] = $_POST['pw'];
                $data['db'] = $_POST['db'];
        }

        $newJsonString = json_encode($data);
        file_put_contents('connect.json', $newJsonString);
        header( "refresh:5;url=connect.php?s=1" );
        // colocar um refrash para a pagina de conexao com o banco de dados
       ?>
    </body>
</html>
