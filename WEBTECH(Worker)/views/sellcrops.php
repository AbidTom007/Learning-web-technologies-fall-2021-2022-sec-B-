<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Deliver Crops</title>
<link rel="stylesheet" href="../css/sellcrops.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
<nav id="navbar">
<a href="WorkerHome.php"><i class="material-icons" title="Home">home</i></a>
<a href="#"><span class="glyphicon glyphicon-grain" title="Crops"></span></a>

</nav>
</header>
<div id="main">
<?php
$arr=array("wheat","barley","cotton","Apples");
if(sizeof($arr)!=0){
$num=mt_rand(0,sizeof($arr)-1);
}
?>
<div id="availablecrops">
<span class="cropname"><span style="text-decoration:underline">Crop</span></br><?php echo $arr[$num]; ?></span>
<span class="availablity"><span style="text-decoration:underline">Units</span></br><?php echo mt_rand(0,1000); ?></span>
<form action="sellcrops.php" method="get" autocomplete="off">
<button type="submit" name="sellcrop" id="sell">Deliver</button>
</form>
</div>
</div>
<body>
</body>
</html>