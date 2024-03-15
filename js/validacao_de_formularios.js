//Formulário login
let form_login = document.form_login;

//Formulários de Biblioteca.php
let form_adicionar_apresentacao = document.form_adicionar_apresentacao;
let form_adicionar_livro = document.form_adicionar_livro;

function validar(let formulario){
	//Validando formulário de login
	if (formulario == form_login) {
		if (form_login.nome.value == '' || formulario.senha.value == '') {
			alert("Preencha os campos");
			return false;
		}
	}

	//Validando os formulários de biblioteca.php
	//adicionar apresentacao
	if (formulario == form_adicionar_apresentacao) {
		if (formulario.disciplina.value == '' || formulario.arquivo_apresentacao == '') {
			alert("Preencha os campos");
			return false;
		}
	}
	//adicionar livro
	if (formulario == form_adicionar_livro) {
		if (formulario.autor_livro.value == ''  || formulario.categoria_livro.value == '' || formulario.ano_publicacao_livro.value == '' || formulario.arquivo_livro.value == '') {
			alert('Preencha os campos');
			return false
		}
	}
}