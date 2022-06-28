<?php
include("conexao.php");

$codigo = filter_input(INPUT_GET, 'cod');
$sql = "DELETE FROM tb_projeto WHERE pro_codigo = $codigo;";
$executar = mysqli_query($conexao, $sql);
header("location: ../admin/cad_projeto.php");
?>
 