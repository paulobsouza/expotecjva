<?php
include("conexao.php");

$codigo = filter_input(INPUT_POST, 'codigo');
$turma = filter_input(INPUT_POST, 'turma');

if ($codigo != "") {
    $sql = "UPDATE tb_turma SET tur_nome = '$curso' WHERE cur_codigo = $codigo;";
} else {
    $sql = "INSERT INTO tb_turma(tur_nome) VALUES ('$turma');";
}

$executar = mysqli_query($conexao, $sql);
header("location: ../admin/cad_turma.php");
?>
