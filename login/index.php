 <!-- 
/**
 * Project:     Ajax Login
 * File:        index.php
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
 -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> .: Ajax Login :. </title>
<meta name="Generator" content="EditPlus">
<meta name="Author" content="">
<meta name="Keywords" content="">
<meta name="Description" content="">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="jquery-latest.js"></script>
<script src="script.js"></script>
</head>
<body>
<!-- This P tag shows Error mesage -->
<p class="display"></p>
<form name="test" id="test" method="POST">
	<center>
		<div id="rolling">
			<table cellspacing="0" cellpadding="0" border ="0"> 
			<tr>
			 <th colspan="2">User Login</th>
			</tr>
			<tr>
				<td colspan="2"><span id="msg"></span></td>
			</tr>
			<tr>
				<td>Username </td><td><input type="text" name="uname" id="uname"></td>
			</tr>
			<tr>
				<td>Passowrd </td><td><input type="password" name="pass" id="pass"></td>
			</tr>
			<tr>
				<td></td><td align="left"><input type="submit" Value="Login" id="submit"></td>
			</tr>
			<tr>
			</table>
		</div>
	</center>
</form>
</body>
</html>
