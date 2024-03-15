<?php
session_start();

	if (isset($_GET['sair'])) {
		// code...
		session_unset();
		$_SESSION['logado'] = false;
		
	}
	

if( !$_SESSION['logado']):
	header("Location: /portal_cefac/login.php");
else:
	$id = "Sucesso"; 
endif;

//Ajustando o link de login e lougout
if($_SESSION['logado']):
    $entrar_sair = "<a href='index.php?sair=1'>Sair</a>";
else:
    $entrar_sair = "<a href='login.php'>Entrar</a>";
endif;
