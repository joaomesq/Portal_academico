<?php
require_once './php_action/validar.php';
require_once './php_action/action_notas.php';
?>
<!DOCTYPE html>
<html lang="pt-ao">
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="./css/notas.css">
     <link rel="stylesheet" type="text/css" href="./css/custom.css">
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
          </section>
          <h2><span><?php echo $_SESSION['usuario']; ?></span></h2>
     </header>

     <main>
          <article class="notas">
               <section class="trimestre">
                    <h3 class="span"><span>1º Trimestre</span></h3>
                    <table border="1">
                         <thead>
                              <tr>
                                   <th>Disciplina</th>
                                   <th>1ª Parcelar</th>
                                   <th>2ª Parcelar</th>
                                   <th>Nota Final</th>
                              </tr>
                         </thead>
                         <tbody>
                                   <?php
                                        exibir_notas(1);
                                   ?>
                         </tbody>
                    </table>
               </section>
               <section class="trimestre">
                    <h3 class="span"><span>2º Trimestre</span></h3>
                    <table border="1">
                         <thead>
                              <tr>
                                   <th>Disciplina</th>
                                   <th>1ª Parcelar</th>
                                   <th>2ª Parcelar</th>
                                   <th>Nota Final</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                                   exibir_notas(2);
                              ?>
                         </tbody>
                    </table>
               </section>
               <section class="trimestre">
                    <h3 class="span"><span>3º Trimestre</span></h3>
                    <table border="1">
                         <thead>
                              <tr>
                                   <th>Disciplina</th>
                                   <th>1ª Parcelar</th>
                                   <th>2ª Parcelar</th>
                                   <th>Nota Final</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php
                                   exibir_notas(3);
                              ?>
                         </tbody>
                    </table>
               </section>
<!--
               <a href="notas.php?sair=1" class="btn_sair">Sair</a>
-->
          </article>
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