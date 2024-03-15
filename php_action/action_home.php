<?php
//conexao
require_once 'conect.php';

function exibir_professores($ano){
	global $conect;
    
	$sql = "SELECT *FROM professor WHERE turma_professor = '$ano' OR turma_professor = 'Todas' ";
	$consulta = requisicao_Bd($conect, $sql);

	if(obter_total_de_linhas_Dados($consulta) != 0):
		while($dados = mysqli_fetch_assoc($consulta)):
			echo "
		      <li>".$dados['nome_professor']."</li>
			";
		endwhile;
	else:
		echo "
		         <li>---</li>
		";
	endif;
}

function exibir_disciplinas($ano){
	global $conect;

	$sql = "SELECT *FROM disciplinas WHERE ano_disciplina = '$ano' OR ano_disciplina = 'Todas' ";
	$consulta = requisicao_Bd($conect, $sql);

	if(obter_total_de_linhas_Dados($consulta) != 0):
		while($dados = mysqli_fetch_assoc($consulta)):
			echo "
		      <li>".$dados['nome_disciplina']."</li>
			";
		endwhile;
	else:
		echo "
		         <li>---</li>
		";
	endif;
}

function exibir_horario($ano){
	global $conect;

	$sql = "SELECT *FROM horario WHERE ano_horario = '$ano' ";
	$consulta = requisicao_Bd($conect, $sql);

	if(obter_total_de_linhas_Dados($consulta) != 0):
		while($horario = obter_Dados($consulta)):
			echo "
			      <tr>
			          <td>".$horario['segunda']."</td>
			          <td>".$horario['terca']."</td>
			          <td>".$horario['quarta']."</td>
			          <td>".$horario['quinta']."</td>
			          <td>".$horario['sexta']."</td>
			      </tr>
			      ";
		endwhile;
	else:
		echo "
               <tr>
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
                      <td>---</td>
               </tr>
                    ";
	endif;
}

function exibir_evento($ano){
	global $conect;

	$sql = "SELECT *FROM eventos WHERE ano_evento = '$ano' OR ano_evento = 0";
	$consulta = requisicao_Bd($conect, $sql);

	if(obter_total_de_linhas_Dados($consulta) !=0):
		while($evento = obter_Dados($consulta)):
			echo "
			     <li>
			         <h4>".$evento['titulo_evento']."</h4>
			         <p>".$evento['descricao_evento']."</p>
			     </li>
			     ";
		endwhile;
	else:
		echo "
		      <li>Sem eventos</li>		      
		     ";
	endif;
}