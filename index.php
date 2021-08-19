<?php

# Conexão com o banco de dados MySQL
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'jhonatan';

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);
/*
# Criando tabelas usando PHP
# Tabela cursos (nome do curso, carga horaria)
$query = 'CREATE TABLE CURSOS (
	id_curso int not null auto_increment,
	nome_curso varchar(255) not null,
	carga_horaria int not null,
	primary key(id_curso)
)';

$executar = mysqli_query($conexao,$query);

# Tabela alunos (nome do aluno, data_nascimento)
$query = 'CREATE TABLE ALUNOS(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255),
    primary key(id_aluno)
)';

$executar = mysqli_query($conexao,$query);

# Tabela alunos_cursos (aluno, curso)

# Tabela alunos (nome do aluno, data_nascimento)
$query = 'CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)';

$executar = mysqli_query($conexao,$query);

# Inserindo dados na tabela Alunos
$query = 'INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES("Jhonatan","24-04-2000")';

$executar = mysqli_query($conexao,$query);

$query = 'INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES("Maria","19-06-2000")';

$executar = mysqli_query($conexao,$query);

# Inserindo dados na tabela Cursos
$query = 'INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES("PHP E MYSQL",10)';

$executar = mysqli_query($conexao,$query);

# Inserindo dados na tabela Alunos_Cursos
$query = 'INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso) VALUES(1,1)';

$executar = mysqli_query($conexao,$query);
*/

if(mysqli_query($conexao, 'DELETE FROM ALUNOS WHERE ID_ALUNO = 6')){
    echo 'Apagado com sucesso';
}else{
    echo 'Falha ao apagar dados';
}
