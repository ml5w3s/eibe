<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Projeto PHP</title>
	<link rel="stylesheet" type="text/css" href="estilo/geral.css">
</head>
<?php
include("conexao.php");
$conn = conectar();
try{
$bairro = $_POST["txt_bairro"];
	if(isset($bairro)){
		$stm = $conn->prepare("INSERT INTO bairro(nome_bairro) VALUES (?)");
		$stm->bindValue(1,$bairro,PDO::PARAM_STR);
		$stm->execute();
	}
	echo'<script>
			alert("Registro salvo com sucesso!");
			window.location.href = "../index.html";
    	</script>';
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>
</head>
</html>
