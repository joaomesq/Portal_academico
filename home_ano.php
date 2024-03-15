<?php
//Validar
require_once './php_action/validar.php';

require_once './php_action/action_home.php';

//Recolhendo o ano
if( $_GET['ano'] >= 1 && $_GET['ano'] <=4):
	$ano = clear($_GET['ano']);
else:
	$ano = 0;
endif;
?>
<!DOCTYPE html>
<html lang="pt-ao">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" href="/portal_cefac/css/custom.css">
     <link rel="stylesheet" href="/portal_cefac/css/home.css">

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
          <article class="informacao">
               <section class="horario">
                    <h3>Horário</h3>
                    <table border="1">
                         <thead>
                              <tr>
                                   <th>Segunda</th>
                                   <th>Terça</th>
                                   <th>Quarta</th>
                                   <th>Quinta</th>
                                   <th>Sexta</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                                  exibir_horario($ano);
                              ?>
                         </tbody>
                    </table>
               </section>

               <section class="disicplinas">
                    <h3>Disciplinas</h3>
                    <ul>
                         <?php
                              exibir_disciplinas($ano);
                         ?>
                    </ul>
               </section>
               <section class="professores">
                    <h3>Professores</h3>
                    <ul>
                         <?php
                              exibir_professores($ano);
                         ?>
                    </ul>
               </section>

               <section class="eventos">
                    <h3>Eventos</h3>
                    <ul>
                         <?php
                              exibir_evento($ano);
                         ?>
                    </ul>
               </section>
          </article>

          <a href="home_ano.php?sair=1" class="btn_sair">Sair</a>
     </main>

     <footer class="center">
          <p>"Chanax: Desenvolvendo ideias, criando soluções"</p>
          <p>&copy; 2023 - Todos os direitos reservados a Chanax Tecnolog.</p>
     </footer>

     <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>

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