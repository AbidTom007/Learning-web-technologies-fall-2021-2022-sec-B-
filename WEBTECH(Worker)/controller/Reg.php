<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$username = $_REQUEST['wname'];
		$password = $_REQUEST['wpass'];
		$cpass = $_REQUEST['wcpass'];
		$gender=$_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$mob = $_REQUEST['mob'];
		$yob = $_REQUEST['yob']; 
		$phone = $_REQUEST['number'];

		if($username != "")
		{
			if($password != "" and $cpass==$password)
			{
					if ($dob != "" and $mob!="" and $yob!="") 
					{
						$con = mysqli_connect('localhost','root','','workers');
						$sql = "insert into worker(Name, Pass, Gender, DD, MM, YY, Phone) values ('{$username}','{$password}','{$gender}','{$dob}','{$mob}','{$yob}','{$phone}') ";
						$result = mysqli_query($con, $sql);
						header('location: ../views/wlogin.html');
						mysqli_close($con);
					}
					else
					{
						echo "Invalid Date of Birth...";
					}
				}
			else
			{
				echo "invalid password...<Br> or confirm password doesnot matched....";
			}
		}
		else
			{
				echo "invalid username...";
			}
	}
?>