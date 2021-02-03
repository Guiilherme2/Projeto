<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_patricia";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(mysqli_connect_errno($conexao)){
	echo "Erro na conexão com o banco";
	mysqli_connect_error();
}else{
	
} 
?>