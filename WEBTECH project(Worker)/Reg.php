<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['useradmin'];
		$password = $_REQUEST['passadmin'];
		$dob = $_REQUEST['dob'];
		$mob = $_REQUEST['mob'];
		$yob = $_REQUEST['yob'];

		if($username != "")
		{
			if($password != "")
			{
					if ($dob != "") 
					{
						$myfile = fopen('worker.txt', 'a');
						$user = $username."|".$password."|".$dob."-".$mob."-".$yob."\r\n";
						fwrite($myfile, $user);
						fclose($myfile);
						header('location: wlogin.html');
					}
					else
					{
						echo "Invalid Date of Birth...";
					}
				
			}
			else
			{
				echo "invalid password...";
			}
		}
		else
			{
				echo "invalid username...";
			}
	}
?>