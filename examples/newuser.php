<?php include 'header.php'; ?>


        <div class='w3-panel w3-card w3-write'><p>Please regist or if you are registred select your user name at top menu <User></p>
        <form action='register.php' method='post'>
          First name: <input class='w3-input w3-white' type='text' name='fname' placeholder='Nome' required><br>
          Last name: <input class='w3-input w3-white' type='text' name='lname' placeholder='Sobrenome' required><br>
          E-mail: <input class='w3-input w3-white' type='text' name='email' placeholder='E-mail@email.com' required><br>
          <input type='submit' class='w3-button w3-green w3-right w3-round-xxlarge' value='Register'><br><br>
        </form><br>
        </div>

      <p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>

  </body>
</html>
