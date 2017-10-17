/*
 * Project:     Ajax Login
 * File:        script.js
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

$(document).ready(function(){
 $("#rolling").slideDown('slow');
});
$(document).ready(function()
 {
	$("#submit").click(function()
		{
			if($("#uname").val()=="" || $("#pass").val()=="")
			{
				$("p").fadeTo('slow','0.99');
				$("msg").hide();
				$("p").fadeIn('slow',function(){$("p").html("<span id='error'>Please enter username and password</span>");});
				return false;
			}
			else
			{
				$("p").html('<span class="normal"><img src="loading.gif"></span>');
				var uname = $("#uname").val();
				var pass = $("#pass").val();
					$.getJSON("server.php",{username:uname,password:pass},function(json)
					{
						// Parse JSON data if json.response.error = 1 then login successfull
						if(json.response.error == "1")
						{
							$("p").css('background','#CBF8AF');
							$("p").css('border-bottom','4px solid #109601');
							data = "<span id='msg'>Welcome "+uname+"</span> <a href='http://localhost/pptx.js/examples/connect.php?s=1'>Go to connection Page</a>";

						}
						// Login failed
						else
						{
							$("p").css('background','#FFD9D9');
							$("p").css('border-bottom','4px solid #FC2607');
							data = "<span id='error'>The username or password are not correct</span>";
						}
							$("p").fadeTo('slow','0.99');
							$("p").fadeIn('slow',function(){$("p").html("<span id='msg'>"+data+"</span>");});
					});
				return false;
			}
		}
	);

	$("#uname").focus(function(){
			$("p").fadeTo('slow','0.0',function(){$("p").html('');});
		}
	 );
	$("#pass").focus(function(){
			$("p").fadeTo('slow','0.0',function(){$("p").html('');});
		}
	);
});
