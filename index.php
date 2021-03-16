<?php
session_start();

$date=date('F d, Y, g:i:s a' );

echo "TODAY is  " .$date;
	
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="sucess">
		<h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
		        <a href="http://172.16.10.9/" >
			
			<h3>" Click here !"</h3>
			
		</a>   
		<a href="logout.php">Déconnexion</a>
		</div>
	</body>
</html>