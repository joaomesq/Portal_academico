<?php
#Este arquivo implementa a camada de persistência para o banco de dados MYSQL.

//Estabelece conexão com o banco
function conectar_bd($server_Name, $user_Name, $user_Password, $bd_name){
	$yia = mysqli_connect($server_Name, $user_Name, $user_Password, $bd_name) or die("Erro");
	return $yia;
}

//Desfaz a conexão com o banco
function deconectar_bd($link){
	mysqli_close($link);
}

//CRUD

function requisicao_Bd($conexao, $sql)
{
	// code...
	$yia = mysqli_query($conexao, $sql) ;
	return $yia;

}

function obter_Dados($resultado)
{
	// code...
	$yia = mysqli_fetch_assoc($resultado)/* or die("Erro ao obter dados")*/;
	return $yia;
}

function obter_total_de_linhas_Dados($resultado)
{
	// code...
	$yia = mysqli_num_rows($resultado) /*or die("Erro ao obter total")*/;

	return $yia;
}