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
	id_curso int not null auto_increment,
	nome_curso varchar(255) not null,
	carga_horaria int not null,
	primary key(id_curso)
)';

$executar = mysqli_query($conexao,$query);
if($executar){
    echo 'Executado com sucesso(cursos)';
}else{
    echo 'Falha ao executar(cursos)';
}

# Tabela alunos (nome do aluno, data_nascimento)
$query = 'CREATE TABLE ALUNOS(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255),
    primary key(id_aluno)
)';

$executar = mysqli_query($conexao,$query);
if($executar){
    echo 'Executado com sucesso(alunos)';
}else{
    echo 'Falha ao executar(alunos)';
}

# Tabela alunos_cursos (aluno, curso)

# Tabela alunos (nome do aluno, data_nascimento)
$query = 'CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)';

$executar = mysqli_query($conexao,$query);
if($executar){
    echo 'Executado com sucesso(alunos_cursos)';
}else{
    echo 'Falha ao executar(alunos_cursos)';
}