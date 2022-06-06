<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['wname'];
		$password = $_REQUEST['wpass'];
	
		if($username != "")
		{
			if($password != "")
			{
				$con = mysqli_connect('localhost','root','','workers');
				$sql = "select * from worker where Name='{$username}' and Pass='{$password}'";
				$result = mysqli_query($con, $sql);
				$user = mysqli_fetch_assoc($result);
				

				if ($username == $user['Name'] && $password == $user['Pass']) 
				{
					setcookie('flag','true',time()+3600, '/');
					header('location: ../views/WorkerHome.php');
				}
				else
				{
					header('location: ../views/wlogin.html');
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