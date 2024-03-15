<?php
session_start();

//trazendo logout
if(isset($_GET['sair'])):
     require_once './php_action/validar.php';
endif;

//Usuario > dados
if (isset($_SESSION['logado']) && $_SESSION['logado'] != false):
     //Caso esteja logado
     $valor = 'Estudante';
     //Logar - deslogar
     $entrar_sair = "<a href='index.php?sair=1'>Sair</a>";
else:
     $_SESSION['usuario'] = 'Visitante';
     $_SESSION['ano_usuario'] = '';
     //Logar - deslogar
     $entrar_sair = "<a href='login.php'>Entrar</a>";
endif;
?>
<!DOCTYPE html>
<html lang="pt-ao">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="./css/normalize.css">
     <link rel="stylesheet" href="./css/custom.css">
     <link rel="stylesheet" type="text/css" href="./css/index.css">

	<title>YIA | Portal Informática</title>
</head>
<body>
     <header class="cabecalho">
          <section>
     	<h1><a href="index.php"><img src="./img/logo_black.png"></a></h1>
          
          <button class="btn_open"><img src="./img/menu.png"></button>
          <div class="modal">
          <button class="btn_close">X</button>
     	<nav>
     		<ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="notas.php">Notas</a></li>
                    <li><a href="biblioteca.php">Biblioteca</a></li>
                    <li><?php echo $entrar_sair; ?></li>
               </ul>
     	</nav>
          </div>

          </section>
          <h2><span><?php echo $_SESSION['usuario']; ?></span></h2>
     </header>

     <main class="principal">
          <article class="turmas">
               <section class="primeiro_ano">
                    <a href="home_ano.php?ano=1"><div>1º Ano</div></a>
               </section>
               <section class="segundo_ano">
                    <a href="home_ano.php?ano=2"><div>2º Ano</div></a>
               </section>
               <section class="terceiro_ano">
                    <a href="home_ano.php?ano=3"><div>3º Ano</div></a>
               </section>
               <section class="ultimo_ano">
                    <a href="home_ano.php?ano=4"><div>4º Ano</div></a>
               </section>
          </article>
<!--
          <a href="index.php?sair=1" class="btn_sair">Sair</a>
 -->    
     </main>

     <footer class="center">
          <p>"Chanax: Desenvolvendo ideias, criando soluções"</p>
          <p>&copy; 2023 - Todos os direitos reservados a Chanax Tecnolog.</p>
     </footer>

     <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>

    <script>
          $(".btn_open").click(function () {
               $(".modal").show();
          })
          $(".btn_close").click(function () {
               $(".modal").hide();
          });
     </script>
</body>
</html>