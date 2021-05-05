<?php
//Nome do servidor que está o banco de dados
$servidor = "localhost";
//Usuário do banco de dados
$usuario = "root";
//Senha do banco de dados
$senha = "";
//Nome da base de dados
$dbname = "ari";

//Criar a conexao com MySQLi
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);