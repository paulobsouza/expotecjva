<?php
include("conexao.php");

$codigo = filter_input(INPUT_GET, 'cod');
$sql = "DELETE FROM tb_ano WHERE ano_codigo = $codigo;";
$executar = mysqli_query($conexao, $sql);
header("location: ../admin/cad_ano.php");
?>
 