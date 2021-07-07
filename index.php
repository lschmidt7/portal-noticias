<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>

	<body>

		<?php

			include("cabecalho.php");
		?>
		<div style="width: 80%; margin-left: 10%;">
		<?php

			session_start();
			if(isset($_SESSION['email'])) // AQUI O USUÁRIO JÁ ESTÁ LOGADO
			{
				if(isset($_GET['pag'])) // EXISTE UMA PÁGINA SENDO PASSADA POR URL
				{
					include($_GET['pag']);
				}
				else {
					include('home.php');
				}
			}
			else { // AQUI NO ELSE NÃO EXISTE USUÁRIO LOGADO AINDA
				if(isset($_GET['pag'])) // EXISTE UMA PÁGINA SENDO PASSADA POR URL
				{
					include($_GET['pag']);
				}
				else { // NÃO EXISTE PÁGINA SENDO PASSADA POR URL
					include("login-usuario.html");
				}
			}
		?>
		</div>

	</body>

</html>