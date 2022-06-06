<?php 
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$Name = $_REQUEST['Name'];
		$gender=$_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$mob = $_REQUEST['mob'];
		$yob = $_REQUEST['yob']; 
		$Phone = $_REQUEST['number'];
		$Speciality = $_REQUEST['Speciality'];

		if($Name != "")
		{

			
					if ($dob != "" and $mob!="" and $yob!="") 
					{
						$con = mysqli_connect('localhost','root','','r_subordinate');
						$sql = "insert into subordinates(Name, gender, dob, mob, yob, Phone,Speciality) values ('{$Name}','{$gender}','{$dob}','{$mob}','{$yob}','{$Phone}','{$Speciality}') ";
						$result = mysqli_query($con, $sql);
						header('location: ../views/WorkerHome.php');
						mysqli_close($con);
					}
					else
					{
						echo "Invalid Date of Birth...";
					}
				
			
		}
		else
			{
				echo "invalid Name...";
			}
	}
?>