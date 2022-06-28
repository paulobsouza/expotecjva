<?php
include("conexao.php");

$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO tb_adm(adm_nome, adm_login, adm_senha) VALUES ('$nome', '$usuario', '$senha');";
$executar = mysqli_query($conexao, $sql);

echo "<script type='text/javascript'> alert('Salvo com sucesso!'); location.href='../index.php'; </script>";
header("location: ../index.php");
?>

