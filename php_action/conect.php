<?php
require_once 'persistencia.php';

$conect = conectar_bd('127.0.0.1', 'root', '', 'portal_cefac');

//Segurança
function clear($input){
	global $conect;
	$var = mysqli_escape_string($conect, $input);
	$var = htmlspecialchars($var);
	return $var;
}