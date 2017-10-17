<?php include 'header.php'; ?>

        </div>
        <div class='w3-panel w3-card w3-write'>
          <br><p>Register executor section <User></p>
        <form action='ex_insert.php' method='post'>
          <input class='w3-input w3 w3-gray' type='text' name='fname' placeholder='Nome' required><br>
          <input class='w3-input w3 w3-gray' type='text' name='email' placeholder='E-mail@email.com' required><br>
          <select class='w3-input w3 w3-gray' name='func'><br>
              <option value=''>selcione a fun&ccedil;&atilde;o</option>
              <option value='Eletrica'>Eletrica</option>
              <option value='Mecanica'>Mecanica</option>
              <option value='Hidraulica'>Hidraulica</option>
              <option value='Civil'>Civil</option>
              <option value='adm'>ADM</option>
          </select><br>
          <input class='w3-input w3-gray' type='password' name='senha' placeholder='Senha' required><br>
          <input type='submit' class='w3-button w3-green w3-right w3-round-xxlarge' value='Register'><br><br>
        </form><br>
        </div>
<p>Status: <span class='w3-tag w3-green'> Server connected! </span><img src='./images/server.gif' style='width:25px;height:25px;'></p>


  </body>
</html>
