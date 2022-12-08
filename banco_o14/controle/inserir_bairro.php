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
			window.location.href = "../formulario/cad_bairro.php";
    	</script>';
}catch(PDOException $ex_){
	echo 'Erro '. $ex->getMessage();
}
?>