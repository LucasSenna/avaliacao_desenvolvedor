<?php
session_start(); //Inicializar a sessão com PHP
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Ari Teste</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="alert alert-primary text-center">
			<h1>Importação - Colégio Ari de Sá</h1>
		</div>
		<?php
		//Imprimir a mensagem de sucesso no upload de dados do arquivo txt para o banco de dados com mysqli
		if (isset($_SESSION['msg'])) {
			//Imprimir o valor da sessão
			echo $_SESSION['msg'];
			//Destruir a sessão com PHP
			unset($_SESSION['msg']);
		}
		?>
		<!--Formulário com PHP para fazer upload de arquivo com PHP-->
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<!--Campo para fazer o upload do arquivo com PHP-->
			<input type="file" name="arquivo"><br><br>
			<input type="submit" value="Importar">
		</form>
	</div>
	<hr>

	<div class="container">
		<div class="alert alert-primary text-center">
			<h2>Registros Importados</h2>
		</div>
		<span id="conteudo"></span>
	</div>
	<script>
		$(document).ready(function() {
			$.post('listar_dados.php', function(retorna) {
				// Substitui o valor no seletor id="conteúdo"
				$("#conteudo").html(retorna);
			});
		});
	</script>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>


</html>