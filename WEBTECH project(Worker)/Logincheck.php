<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['useradmin'];
		$password = $_REQUEST['passadmin'];
	
		if($username != "")
		{
			if($password != "")
			{
				$myfile = fopen('worker.txt', 'r');

				while(!feof($myfile))
				{
					$data = fgets($myfile);
					$myuser = explode('|', $data);
					if(trim($myuser[0]) == $username && trim($myuser[1]) == $password)
					{
						setcookie('flag', 'true', time()+3600, '/');
						header('location: WorkerHome.html');
					}
				}

				echo "invalid username/password...";
					

			}else{
				echo "invalid password...";
			}
		}else{
			echo "invalid username...";
		}
	}

?>