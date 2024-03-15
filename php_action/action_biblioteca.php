 <?php
//conexao
require_once 'conect.php';

//UPLOAD
function upload($ano){
    global $conect;

    //UPLOAD APRESENTACAO
    if ( isset($_POST['carregar_apresentacao'])) {
        // code...
        $disciplina = clear($_POST['disciplina']);

    if($_FILES['arquivo_apresentacao']['size'] == 0)
        die("Selecione o arquivo");

    if(empty($disciplina))
        die("Precisa preenche o campo disciplina");


    if(isset($_FILES['arquivo_apresentacao'])):
        $apresentacao = $_FILES['arquivo_apresentacao'];
        $pasta = './apresentacao/';

        if($apresentacao['error'])
            die("Fallha ao carregar arquivo");

        $nome_apresentacao = $apresentacao['name'];
        $extensao = strtolower(pathinfo($nome_apresentacao, PATHINFO_EXTENSION));
        $caminho = $pasta.$nome_apresentacao;

        if($extensao != 'pptx' AND $extensao != 'ppt' AND $extensao != 'pps' AND $extensao != 'potx' AND $extensao != 'ppsx')
            die("Tipo de arquivo não aceito");
        
        //Verficando a existência do arquivo
        $sql ="SELECT *FROM apresentacao WHERE titulo_apresentacao = '$nome_apresentacao'";
        $consulta = requisicao_Bd($conect, $sql);
        if(obter_total_de_linhas_Dados($consulta) > 0)
            die("O arquivo já existe");

        $sucesso = move_uploaded_file($apresentacao['tmp_name'], $caminho);

        if($sucesso):
            $sql = "INSERT INTO apresentacao (titulo_apresentacao, disciplina_apresentacao, data_upload_apresentacao, caminho_apresentacao, ano_apresentacao) VALUES ('$nome_apresentacao', '$disciplina', NOW(), '$caminho', '$ano')";
            $consulta = mysqli_query($conect, $sql);
        else:
            echo "Fallha ao enviar arquivo";
        endif;
    endif;
    }
        
    //UPLOAD LIVRO
    if (isset($_POST['carregar_livro'])) {
    $autor = clear($_POST['autor_livro']);
    $categoria = clear($_POST['categoria_livro']);
    $ano_publicacao_livro = clear($_POST['ano_publicacao_livro']);

    if($_FILES['arquivo_livro']['size'] == 0)
        die("Selecione o arquivo");

    if(empty($autor) OR empty($categoria) OR empty($ano_publicacao_livro))
        die("Precisa preenche os campos autor, categoria e Ano de Publicacao");


    if(isset($_FILES['arquivo_livro'])):
        $livro = $_FILES['arquivo_livro'];
        $pasta = './livros/';

        if($livro['error'])
            die("Fallha ao carregar arquivo");

        $nome_livro = $livro['name'];
        $extensao = strtolower(pathinfo($nome_livro, PATHINFO_EXTENSION));
        $caminho = $pasta.$nome_livro;

        if($extensao != 'pdf')
            die("Tipo de arquivo não aceito");
        
        //Verificando a existência do arquivo
        $sql ="SELECT *FROM livros WHERE titulo_livro = '$nome_livro'";
        $consulta = requisicao_Bd($conect, $sql);
        if(obter_total_de_linhas_Dados($consulta) > 0)
            die("O arquivo já existe");

        $sucesso = move_uploaded_file($livro['tmp_name'], $caminho);

        if($sucesso):
            $sql = "INSERT INTO livros (titulo_livro, autor_livro, categoria_livro, ano_publicacao_livro, data_upload_livro, caminho_livro, ano_livro) VALUES ('$nome_livro', '$autor', '$categoria', '$ano_publicacao_livro', NOW(), '$caminho', '$ano')";
            $consulta = mysqli_query($conect, $sql);
        else:
            echo "Fallha ao enviar arquivo";
        endif;
    endif;
    }
}


//Exibir arquivo
function exibir_arquivo($valor, $ano){
    global $conect;
    
    //LIVRO
    if ($valor == 'livro') {
        // code...
        $sql = "SELECT *FROM livros WHERE ano_livro = $ano ORDER BY categoria_livro";
    $consulta = mysqli_query($conect, $sql);

    if(mysqli_num_rows($consulta) != 0):
        while($livros = mysqli_fetch_assoc($consulta)):
            echo "
                 <tr>
                     <td>".$livros['titulo_livro']."</td>
                     <td>".$livros['autor_livro']."</td>
                     <td>".$livros['ano_publicacao_livro']."</td>
                     <td>".$livros['categoria_livro']."</td>
                     <td><a href='".$livros['caminho_livro']."' target='_blank'><img src='/portal_cefac/img/dowload.png'></a></td>
                 </tr>
                 ";
        endwhile;
    else:
        echo "
              <tr>
                  <td>Sem ficheiros</td>
              </tr>
              ";
    endif;
    }
    //APRESENTACAO
    elseif ($valor =="apresentacao") {
        // code...
        $sql = "SELECT *FROM apresentacao WHERE ano_apresentacao = $ano ORDER BY disciplina_apresentacao";
    $consulta = mysqli_query($conect, $sql);

    if(mysqli_num_rows($consulta) != 0):
        while($apresentacoes = mysqli_fetch_assoc($consulta)):
            echo "
                 <tr>
                     <td>".$apresentacoes['disciplina_apresentacao']."</td>
                     <td>".$apresentacoes['titulo_apresentacao']."</td>
                     <td><a href='".$apresentacoes['caminho_apresentacao']."' target='_blank'><img src='/portal_cefac/img/dowload.png'></a></td>
                 </tr>
                 ";
        endwhile;
    else:
        echo "
              <tr>
                  <td>Sem ficheiros</td>
              </tr>
              ";
    endif;
    }
}
