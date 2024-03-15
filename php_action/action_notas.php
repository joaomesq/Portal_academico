<?php
//conexao
require_once 'conect.php';

$user_name = $_SESSION['usuario'];

//MOSTRAR NOTAS
function exibir_notas($valor){
     global $conect;
     global $user_name;
    
    //1-TRIMESTRE
     if ($valor == 1) {
          // code...
          $sql = "SELECT *FROM notas WHERE trimestre = 1 AND nome_aluno = '$user_name' ORDER BY disciplina desc";
     $consulta = mysqli_query($conect, $sql);

     if( mysqli_num_rows($consulta) != 0){
          
          while($dados = mysqli_fetch_assoc($consulta)):
               $media = ($dados['primeira_nota'] + $dados['segunda_nota'] )/ 2;
               echo "
                    <tr>
                      <td>".$dados['disciplina']."</td>
                      <td>".$dados['primeira_nota']."</td>
                      <td>".$dados['segunda_nota']."</td>
                      <td>".$media."</td>
                    </tr>
                    ";
          endwhile;
     }else{
          echo "
               <tr>
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
               </tr>
                    ";
           }
    }
    //2-TRIMESTRE
    elseif ($valor == 2) {
     // code...
     $sql = "SELECT *FROM notas WHERE trimestre = 2 AND nome_aluno = '$user_name'";
     $consulta = mysqli_query($conect, $sql);

     if( mysqli_num_rows($consulta) != 0){
          
          while($dados = mysqli_fetch_assoc($consulta)):
               $media = ($dados['primeira_nota'] + $dados['segunda_nota'] )/ 2;
               echo "
                    <tr>
                      <td>".$dados['disciplina']."</td>
                      <td>".$dados['primeira_nota']."</td>
                      <td>".$dados['segunda_nota']."</td>
                      <td>".$media."</td>
                    </tr>
                    ";
          endwhile;
     }else{
          echo "
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
                    ";
        }
    }
    //3-TRIMESTRE
    elseif($valor == 3){
     $sql = "SELECT *FROM notas WHERE trimestre = 3 AND nome_aluno = '$user_name'";
     $consulta = mysqli_query($conect, $sql);

     if( mysqli_num_rows($consulta) != 0){
          
          while($dados = mysqli_fetch_assoc($consulta)):
               $media = ($dados['primeira_nota'] + $dados['segunda_nota'] )/ 2;
               echo "
                    <tr>
                      <td>".$dados['disciplina']."</td>
                      <td>".$dados['primeira_nota']."</td>
                      <td>".$dados['segunda_nota']."</td>
                      <td>".$media."</td>
                    </tr>
                    ";
          endwhile;
     }else{
          echo "
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
                    ";
        }
    }
}   
