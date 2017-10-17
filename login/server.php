<?php

/**
 * Project:     Ajax Login
 * File:        server.php
 *
 * This program demonstrates Ajax Login with jquery.
 * This is open source program.You can modify this script as you want.
 *
 * If you want to use this script in your site,or project
 * You should have to let me know on my mail.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * For questions, help, comments, discussion, etc.,
 * please mail me at amitpatil321@gmail.com
 *
 * @author : Amit S. Patil (India,Maharashtra(Pune))
 * @package: Ajax Login
 * @version: 1.0.0
 */

// Check if username and password is correct or not
// You can fetch this values from database also

if($_GET['username'] == "admin" && $_GET['password'] == "admin")
  echo '{"response":{"error": "1"}}';
else
  echo '{"response":{"error": "0"}}';
?>
