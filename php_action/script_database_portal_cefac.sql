create database portal_cefac
default character set utf8
default collate utf8_general_ci;

create table usuarios(
id_usuario int auto_increment NOT NULL,
n_processo_usuario int NOT NULL,
nome_usuario varchar(50) NOT NULL,
ano_usuario int NOT NULL,
senha_usuario varchar(100) NOT NULL,
email_usuario varchar(100) default'---',
primary key(id_usuario)
)engine=InnoDB;

/*Inserindo usuário de testes*/
insert into usuarios
	VALUES(default, 1714, 'João Mesquita', 1, 'mesquita', 'joaob.mesquita1@gmail.com');
/*--------------------------*/

create table notas(
id_notas int auto_increment NOT NULL,
nome_aluno varchar(100) NOT NULL,
ano_aluno int NOT NULL,
disciplina varchar(50) NOT NULL,
trimestre int NOT NULL,
primeira_nota float NOT NULL,
segunda_nota float NOT NULL,
primary key(id_notas)
)engine=InnoDB;

/*Inserindo notas -- para testes*/
insert into notas
	VALUES
	(default, 'João Mesquita', 1, 'Programação', 1, 18, 10),
	(default, 'João Mesquita', 1, 'Física', 1, 18, 10),
	(default, 'João Mesquita', 1, 'Matemática', 1, 18, 10),
	(default, 'João Mesquita', 1, 'SEAC', 1, 18, 10);
/*--------------------------*/


create table apresentacao(
id_apresentacao int auto_increment NOT NULL,
titulo_apresentacao varchar(100) NOT NULL,
disciplina_apresentacao varchar(50) NOT NULL,
data_upload_apresentacao date NOT NULL,
caminho_apresentacao varchar(100) NOT NULL,
ano_apresentacao int NOT NULL,
primary key(id_apresentacao)
)engine=InnoDB;

create table livros(
id_livro int auto_increment NOT NULL,
autor_livro varchar(100) NOT NULL,
titulo_livro varchar(100) NOT NULL,
categoria_livro varchar(50) NOT NULL,
ano_publicacao_livro int NOT NULL,
data_upload_livro date NOT NULL,
caminho_livro varchar(100) NOT NULL,
ano_livro int NOT NULL,
primary key(id_livro)
)engine=InnoDB;

create table professor(
id_professor int auto_increment NOT NULL,
nome_professor varchar(100) NOT NULL,
disciplina_professor varchar(100) NOT NULL,
turma_professor varchar(50) NOT NULL default 'Todas',
nivel_professor varchar(50) NOT NULL default 'Licenciatura',
cargo_professor varchar(100) default 'Permanente',
primary key(id_professor)
)engine=InnoDB;

/*Inserindo professores -- testes*/
insert into professor
	VALUES(default, 'Mesquita', 'Programação', '1', default, default);
/*--------------------------*/

create table disciplinas(
id_disciplina int auto_increment,
nome_disciplina varchar(50) NOT NULL,
professor_disciplina varchar(100) NOT NULL,
ano_disciplina varchar(20) NOT NULL default 'Todas',
primary key(id_disciplina)
)engine=InnoDB;

/*Inserindo algumas disciplinas -- testes*/
insert into disciplinas
	VALUES
	(default, 'Programação', 'Mesquita', default),
	(default, 'SEAC', 'Maria Soares', default),
	(default, 'TIC', 'Cardiny', 1),
	(default, 'TREI', 'Baptista', default);
/*--------------------------*/

create table horario(
id_horaio int auto_increment NOT NULL,
ano_horario int NOT NULL,
segunda varchar(50) NOT NULL default '---',
terca varchar(50) NOT NULL default '---',
quarta varchar(50) NOT NULL default '---',
quinta varchar(50) NOT NULL default '---',
sexta varchar(50) NOT NULL default '---',
primary key(id_horario)
)engine=InnoDB;

create table eventos(
id_evento int auto_increment NOT NULL,
ano_evento int NOT NULL default 0,
titulo_evento varchar(100) NOT NULL,
descricao_evento text NOT NULL,
primary key(id_evento)
)engine=InnoDB;