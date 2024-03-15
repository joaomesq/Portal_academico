<?php
//Conexão
require_once 'conect.php';

//Iniciando sessão
session_start();

if (isset($_POST['btn_entrar'])) {
	// code...
	$nome = clear($_POST['nome']);
	$senha = clear($_POST['senha']);
    $mensagem = '';

    if(empty($nome) OR empty($senha)):
    	$mensagem = 'Preencha todos os campos';
    else:
    	$sql = "SELECT nome_usuario, ano_usuario FROM usuarios WHERE n_processo_usuario = '$nome' AND senha_usuario = '$senha'";
    	$consulta = mysqli_query($conect, $sql);

    	if(mysqli_num_rows($consulta) == 1 ):
    		$dados = mysqli_fetch_assoc($consulta);
            
            $_SESSION['logado'] = true;
            $_SESSION['usuario'] = $dados['nome_usuario'];
            $_SESSION['ano_usuario'] = $dados['ano_usuario'];
            
            header('Location: /portal_cefac/index.php');
    	else:
    		$mensagem = 'Credencias incorretas';
    	endif;
    endif;

    if(!empty($mensagem)):
        header("Location: /portal_cefac/login.php?Erro=<?php echo $mensagem?>");
    endif;
}