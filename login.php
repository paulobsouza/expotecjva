<?php
	if (isset($_POST['login']) || isset($_POST['senha'])){
		session_start();
        include "conexao.php";
        $login = (filter_input(INPUT_POST, 'login'));
    	$senha = (filter_input(INPUT_POST, 'senha'));
    	$tipo = (filter_input(INPUT_POST, 'tipo'));

    if($tipo == 0) {
    	$query = "SELECT * FROM tb_aluno WHERE alu_id = '$id' AND alu_senha = '$senha'";
    	$sql = mysqli_query($conexao, $query);
        $count = 0;
        while($dados = mysqli_fetch_assoc($sql)){
		   $count++;
		   $nome = $dados['alu_nome'];
		}   if ($count == 1) {
				$_SESSION['alu_nome'] = $nome;
				$_SESSION['alu_login'] = $login;
        		$_SESSION['alu_senha'] = $senha;
        		header("location: ../aluno/index.php");
			} else {
				echo "<script type='text/javascript'>
				alert('Dados Incorretos');
				window.location.href='../login.php';
				</script>";
			}
		}	
    else if($tipo == 2) {
    	$query = "SELECT * FROM tb_adm WHERE adm_login = '$login' AND adm_senha = '$senha'";
    	$sql = mysqli_query($conexao, $query);
        $count = 0;
        while($dados = mysqli_fetch_assoc($sql)){
			$count++;
			$login = $dados['adm_login'];
		}
			if ($cont == 1) {
				//$_SESSION['adm_nome'] = $nome;
				$_SESSION['adm_login'] = $login;
        		$_SESSION['adm_senha'] = $senha;
        		header("location: ../admin/index.php");
		    } else {
				echo "<script type='text/javascript'>
				alert('Dados Incorretos');
				window.location.href='../index.php';
				</script>";
			}
	    }	
    } else {
		header('location: ../admin/index.php');
	}
?>
