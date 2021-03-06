<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
<link rel="stylesheet" href="../css/tools.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.2/css/all.css' integrity='sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns' crossorigin='anonymous'>
</head>
<header>
<nav id="navbar">
<a href="WorkerHome.php"><i class="material-icons" title="Home">home</i></a>
<a href="weather.html"><span class="glyphicon glyphicon-tint" title="Weather"></span></a>
<a href="work.html"><i class="fas fa-hammer" title="Work" ></i></a>
<a href="#"><i class="fas fa-toolbox" title="Tools" style="color:grey"></i></a>
</nav>
</header>
<div id="main">
<form id="bidform" action="tools.php" method="post" autocomplete="off">
<input id="amount" title="amount" type="number" min="10" step="10" name="amount" placeholder="Enter your bid" required /><br>
<button id="bid" id="bid" title="bid" type="submit" name="bid">Bid</button>
</form>
</div>
<body>
</body>
</html>
