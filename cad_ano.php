<?php
include("conexao.php");

$codigo = filter_input(INPUT_POST, 'codigo');
$ano = filter_input(INPUT_POST, 'ano');

if ($codigo != "") {
    $sql = "UPDATE tb_ano SET ano_nome = '$ano' WHERE ano_codigo = $codigo;";
} else {
    $sql = "INSERT INTO tb_ano(ano_nome) VALUES ('$ano');";
}

$executar = mysqli_query($conexao, $sql);
header("location: ../admin/cad_ano.php");
?>