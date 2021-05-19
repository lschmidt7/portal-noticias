<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>

		<?php

			include("cabecalho.php");

			session_start();
			if(isset($_SESSION['email']))
			{
				include('home.php');
			}
			else {
				include("login.html");
			}
		?>

	</body>

</html>