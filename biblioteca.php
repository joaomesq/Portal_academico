<?php
//validar
require_once './php_action/validar.php';
//conexao
require_once './php_action/action_biblioteca.php';

if(isset($_GET['ano'])):
    $ano = $_GET['ano'];
endif;

//UPLOAD
if(isset($_POST['carregar_livro']) OR isset($_POST['carregar_apresentacao'])):
    upload($_SESSION['ano_usuario']);
else:
endif;
?>

<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/biblioteca.css">
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
                    <li><?php echo $entrar_sair; ?></a></li>
               </ul>
        </nav>
          </section>
          <h2><span><?php echo $_SESSION['usuario']; ?></span></h2>
     </header>

     <main>
        <article class="conteudo">
            <section class="material">
                <h3 class="span"><span>Apresentações</span></h3>

                <h4>1º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Disciplina</th>
                            <th>Título</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            exibir_arquivo('apresentacao', 1);
                        ?>
                    </tbody>
                </table>
                <br>

                <h4>2º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Disciplina</th>
                            <th>Título</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            exibir_arquivo('apresentacao', 2);
                        ?>
                    </tbody>
                </table>
                <br>

                <h4>3º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Disciplina</th>
                            <th>Título</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            exibir_arquivo('apresentacao', 3);
                        ?>
                    </tbody>
                </table>
                <br>

                <h4>4º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Disciplina</th>
                            <th>Título</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            exibir_arquivo('apresentacao', 0);
                        ?>
                    </tbody>
                </table>
            </section>

            <section class="material">
                <h3 class="span"><span>Livros</span></h3>
                
                <h4>1º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Ano de Publicação</th>
                            <th>Categoria</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                          <?php
                              exibir_arquivo('livro', 1);
                          ?>
                    </tbody>
                </table>
                <br>

                <h4>2º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Ano de Publicação</th>
                            <th>Categoria</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                          <?php
                              exibir_arquivo('livro', 2);
                          ?>
                    </tbody>
                </table>
                <br>

                <h4>3º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Ano de Publicação</th>
                            <th>Categoria</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                          <?php
                              exibir_arquivo('livro', 3);
                          ?>
                    </tbody>
                </table>
                <br>

                <h4>4º Ano</h4>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Ano de Publicação</th>
                            <th>Categoria</th>
                            <th>Link</th>
                        </tr>
                    </thead>

                    <tbody>
                          <?php
                              exibir_arquivo('livro', 4);
                          ?>
                    </tbody>
                </table>
            </section>
            </article>

            <article class="adicionar">
            <button name="btn_adicionar" class="btn_adicionar btn_open_adicionar">Adicionar</button>
            <section class="modal_adicionar">

                <button class="btn_close_adicionar">X</button>
                <div class="modal_adicionar_elementos">

                <div class="modal_add adicionar_apresentacao">
                <form action="" method="POST" name="form_adicionar_apresentacao" enctype="multipart/form-data" onsubmit="return validar()">
                    <fieldset>
                        <legend>Adicionar Apresentação</legend>

                        <p>
                            <label>Disciplina</label>
                            <input type="text" name="disciplina" placeholder="Disciplina">
                        </p>
                        <p>
                            <label>Ficheiro</label>
                            <input type="file" name="arquivo_apresentacao">
                        </p>

                        <br>
                        <button name="carregar_apresentacao" type="submite" class="btn_adicionar">Upload</button>
                        <button type="reset" class="limpar">Limpar</button>
                    </fieldset>
                </form>
                </div>

                <div class="modal_add adicionar_livro">
                <form name="form_adicionar_livro" action="" method="POST" enctype="multipart/form-data" onsubmit="return validar()">
                        <fieldset>
                        <legend>Adicionar Livro</legend>

                        <p>
                            <label>Autor</label>
                            <input type="text" name="autor_livro" placeholder="Autor">
                        </p>
                        <p>
                            <label>Categoria</label>
                            <input type="text" name="categoria_livro" placeholder="Categoria">
                        </p>
                        <p>
                            <label>Ano de Publicação</label>
                            <input type="number" name="ano_publicacao_livro" placeholder="Ano de Publicação">
                        </p>
                        <p>
                            <label>Ficheiro</label>
                            <input type="file" name="arquivo_livro">
                        </p>
                        
                        <br>
                        <button name="carregar_livro" type="submite" class="btn_adicionar">Upload</button>
                        <button type="reset" class="limpar">Limpar</button>
                    </fieldset>
                </form>
                </div>

                </div>
            </section>
<!--
            <a href="biblioteca.php?sair=1" class="btn_sair">Sair</a>
-->
        </article>
     </main>

     <footer class="center">
          <p>"Chanax: Desenvolvendo ideias, criando soluções"</p>
          <p>&copy; 2023 - Todos os direitos reservados a Chanax Tecnolog.</p>
     </footer>

     <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script type="text/javascript" src="./js/validacao_de_formulario.js"></script>

    <script>
          $(".btn_open").click(function () {
               $(".modal").show();
          })
          $(".btn_close").click(function () {
               $(".modal").hide();
          });
          
          //MODAL ADICIONAR
          $(".btn_open_adicionar").click(function () {
               $(".modal_adicionar").show();
          })
          $(".btn_close_adicionar").click(function () {
               $(".modal_adicionar").hide();
          });
     </script>
</body>
</html>