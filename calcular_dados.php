<?php
//Incluir a conexao com BD
include_once("conexao.php");

// Consulta banco de dados
$result_lista = "SELECT * FROM dados ORDER BY id DESC";
$resultado_lista = mysqli_query($conn, $result_lista);

if (($resultado_lista) and ($resultado_lista->num_rows != 0)) {
    while ($row_dado = mysqli_fetch_assoc($resultado_lista)) {   
    ?>
    