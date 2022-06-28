<?php
include("conexao.php");

$id = filter_input(INPUT_GET, 'id');
$sql = "DELETE FROM tb_turma WHERE tur_id = $id;";
$executar = mysqli_query($conexao, $sql);
header("location: ../admin/cad_turma.php");
?>
 