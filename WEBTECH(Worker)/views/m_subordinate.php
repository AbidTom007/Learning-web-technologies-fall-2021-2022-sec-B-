</<?php 
$con = mysqli_connect('localhost','root','','r_subordinate');
$sql = "select * from subordinates";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List of Subordinates</title>
</head>
<body>
	<td width="20%" align="right">
			<a href="WorkerHome.php"><b>HOME</b></a>
		</td>
		</tr>
	<center><h1 style="color:green;">Subordinates List</h1></center>
	<table border="2" align="center" width="100%">
		<tr align="center">
			<th>Name</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Phone</th>
			<th>Speciality</th>
			<th></th>
			

		</tr>
		<?php while($data =mysqli_fetch_assoc($result)){ ?>

		<tr align="center">
			<td><?=$data['Name']?></td>
			<td><?=$data['gender']?></td>
			<td><?=$data['dob']."/".$data['mob']."/".$data['yob']?></td>
			<td><?=$data['Phone']?></td>
			<td><?=$data['Speciality']?></td>
			<td>
				<a href="edit.php?id=<?=$data['']?>">EDIT</a> |
				<a href="delete.php?id=1" style="color: red;">DELETE</a> 
			</td>
		</tr>

		<?php } ?>

	</table>
</body>
</html>