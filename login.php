<!DOCTYPE html>
<html lang="pt-ao">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/custom.css">
    <link rel="stylesheet" href="./css/login.css">
	<title>YIA | Portal Informática</title>
</head>
<body>
    <header class="cabecalho">
     	<h1><img src="./img/logo_black.png"></h1>
    </header>

     <main>
     	<article class="login">
           <section class="card_login">
            <div class="logo_card_login">
                <img src="./img/logo_black.png">
            </div>
            <br>
            <div class="self">
                <h2>The World is amaizing</h2>
                <p>"Chanax: Desenvolvendo ideias, criando soluções"</p>
            </div>
            
            <form action="./php_action/action_login.php" method="POST" name="form_login">
                <label>User</label>
                <p>
                    <input type="text" name="nome" placeholder="" autofocus>
                </p>

                <br>
                <br>
                <label>Password</label>
                <p>
                    <input type="password" name="senha" placeholder="">
                </p>
                <p class="forgwat"><a href="#">Esqueceu a senah?</a></p>
                <br>
                <button name="btn_entrar">Entrar</button>
            </form>
          </section>

          <section class="void"></section>  
        </article>
     </main>

     <script type="text/javascript" src="./js/validacao_de_formulario.js"></script>
</body>
</html>