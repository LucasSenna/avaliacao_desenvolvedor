<?php
session_start(); //Inicializar a sessão com PHP

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);

//Ler os dados do array
foreach ($dados as $index => $linha) {
	//Começar com o Índice diferente de 0 para não pegar a primeira linha
	if ($index != 0){
	//Retirar os espaços em branco no inicio e no final da string
	$linha = trim($linha);
	//Colocar em um array cada item separado pelo TAB na string
	$valor = explode("\t", $linha);

	//Recuperar o valor do array indicando qual posição do array requerido e atribuindo para um variável
	$comprador = $valor[0];
	$descricao = $valor[1];
	$preco_uni = $valor[2];
	$quantidade = $valor[3];
	$endereco = $valor[4];
	$fornecedor = $valor[5];

	//Criar a QUERY com PHP para inserir os dados no banco de dados
	$result_dados = "INSERT INTO dados (comprador, descricao, preco_uni, quantidade, endereco, fornecedor) VALUES ('$comprador', '$descricao', '$preco_uni', '$quantidade', '$endereco', '$fornecedor')";

	//Executar a QUERY para inserir os registros no banco de dados com MySQLi
	$resultado_dados = mysqli_query($conn, $result_dados);
}}
//Criar a variável global com a mensagem de sucesso
$_SESSION['msg'] = "<script>alert('Dados adicionais com sucesso');</script>";
//Redirecionar o usuário com PHP para a página index.php
header("Location: index.php");
