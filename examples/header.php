<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
a:link {
    color: #ffffff;
    background-color: transparent;
    text-decoration: none;
}

a:visited {
    color: pink;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}

a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
  }
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
</style>
</head>

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
        header( "refresh:1;url=connect.php?s=1" );
      } else {
        mysqli_set_charset($conn,"utf8");
        echo "

<body>

<div class='w3-sidebar w3-bar-block w3-card-2 w3-animate-left' style='display:none' id='leftMenu'>
  <button onclick='closeLeftMenu()' class='w3-bar-item w3-button w3-large'>Close &times;</button>";

  $sql = "SELECT * FROM `worker`";
  $result = @mysqli_query($conn, $sql);

  if (@mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = @mysqli_fetch_assoc($result)) {
          echo "<a href='wo.php?id=" . $row["id_wk"]. "' class='w3-bar-item w3-button'>" . $row["firstname"]. " ". $row["lastname"]. " </a>";
      }
      echo "<a href='newuser.php' class='w3-bar-item w3-button'>Registrar usuario</a>";
  } else {
      echo "<a href='newuser.php' class='w3-bar-item w3-button'>Registro de clientes</a>";
  }

echo "
</div>

<div class='w3-sidebar w3-bar-block w3-card-2 w3-animate-right' style='display:none;right:0;' id='rightMenu'>
  <button onclick='closeRightMenu()' class='w3-bar-item w3-button w3-large'>Close &times;</button>
  <a href='register_ex.php' class='w3-bar-item w3-button'>Registrar Executor</a>
  <form action='login.php' method='post'>
    <input type='text' name='user' placeholder='Username'>
    <input type='password' name='pw' placeholder='Password'>
    <input type='submit' value='Login'>
  </form>
</div>

<div class='w3-teal'>
  <button class='w3-button w3-teal w3-xlarge w3-left' onclick='openLeftMenu()'>&#9776; Nova ordem de serviço</button>

  <button onclick='myFunction()' class='w3-btn w3-teal w3-border w3-border-teal w3-round-large w3-display-topmiddle'>ADM</button>
  <div id='Demo' class='w3-dropdown-content w3-bar-block w3-border w3-display-middle'>
  <header class='w3-container w3-teal'>
    <h2>WO System - Login ADM page</h2>
  </header>
  <form action='adm_check.php' method='post'>
    <input type='text' name='user' placeholder='Username'>
    <input type='password' name='pw' placeholder='Password'>
    <input type='submit' value='Login'>
  </form>
  <footer class='w3-container w3-teal'>
    <p>W/O System</p>
  </footer>
  </div>


  <button class='w3-button w3-teal w3-xlarge w3-right' onclick='openRightMenu()'> Executar ordem de serviço &#9776;</button>
  <div class='w3-container'>
    <a href='index.php'><h4 class='w3-opacity w3-write'>WO home page</h4></a>
  </div>
</div>";
}
?>

<script>

function myFunction() {
    var x = document.getElementById("Demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}


function openLeftMenu() {
    document.getElementById("leftMenu").style.display = "block";
}
function closeLeftMenu() {
    document.getElementById("leftMenu").style.display = "none";
}

function openRightMenu() {
    document.getElementById("rightMenu").style.display = "block";
}
function closeRightMenu() {
    document.getElementById("rightMenu").style.display = "none";
}
</script>
