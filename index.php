<?php

# Conexão com o banco de dados MySQL
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'jhonatan';

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

# Criando tabelas usando PHP
# Tabela cursos (nome do curso, carga horaria)
$query = 'CREATE TABLE CURSOS (
	id int not null auto_increment,
	nome_curso varchar(255) not null,
	carga_horaria int not null,
	primary key(id)
)';

$executar = mysqli_query($conexao,$query);
# Tabela alunos (nome do aluno, data_nascimento)
# Tabela alunos_cursos (aluno, curso)

