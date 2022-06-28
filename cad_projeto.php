<?php
include("conexao.php");

$codigo = filter_input(INPUT_POST, 'codigo');
$projeto = filter_input(INPUT_POST, 'projeto');

if ($codigo != "") {
    $sql = "UPDATE tb_projeto SET pro_nome = '$projeto' WHERE pro_codigo = $codigo;";
} else {
    $sql = "INSERT INTO tb_projeto(pro_nome) VALUES ('$projeto');";
}

$executar = mysqli_query($conexao, $sql);
header("location: ../admin/cad_projeto.php");
?>
