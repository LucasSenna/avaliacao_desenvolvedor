<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Ari Teste</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <span id="conteudo"></span>
    </div>

    <script>
        $(document).ready(function() {
            $.post('listar_dados.php', function(retorna) {
                $("#conteudo").html(retorna);
            });
        });
    </script>

</body>


</html>