<?php
//Incluir a conexao com BD
include_once("conexao.php");

// Consulta banco de dados
$result_lista = "SELECT * FROM dados ORDER BY id DESC";
$resultado_lista = mysqli_query($conn, $result_lista);


//Verficiar se encontrou resultados na tabela "dados"
if (($resultado_lista) and ($resultado_lista->num_rows != 0)) {
?>

    <!-- Tabela Responsiva para mostrar registro de importação -->
    <div class="table-responsive">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Comprador</th>
                    <th>Descrição</th>
                    <th>Preço Unitário</th>
                    <th>Quantidade</th>
                    <th>Endereço</th>
                    <th>Fornecedor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row_dado = mysqli_fetch_assoc($resultado_lista)) {
                ?>
                    <tr>
                        <th><?php echo $row_dado['id'] ?></th>
                        <td><?php echo $row_dado['comprador']; ?></td>
                        <td><?php echo $row_dado['descricao']; ?></td>
                        <td><?php echo $row_dado['preco_uni']; ?></td>
                        <td><?php echo $row_dado['quantidade']; ?></td>
                        <td><?php echo $row_dado['endereco']; ?></td>
                        <td><?php echo $row_dado['fornecedor']; ?></td>
                    </tr>
            <?php
                }
            } else {
                echo "Nenhum dado encontrado";
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Valor bruto dos produtos dos registros importados -->
    <div class="container">
        <div class="row">
        <div class="col"></div>
            <div class="col-8">
                <div class="alert alert-info">
                    <h5>Receita bruta total dos registros contidos no arquivo é de: R$
                        <?php
                        $result_soma = "SELECT SUM(total) AS soma FROM dados";
                        $resultado_soma = mysqli_query($conn, $result_soma);
                        $row_soma = mysqli_fetch_assoc($resultado_soma);
                        echo $row_soma['soma'];
                        ?>
                    </h5>
                </div>
            </div>
        </div>
    </div>