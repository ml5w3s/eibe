<?php
include("conexao.php");
$conn = conectar();

try{
session_start();
$user = $_POST["txt_user"];
$pass = md5($_POST["txt_pass"]);

$sql = ("SELECT * FROM usuario where nome_usuario ='$user'");

foreach ($conn->query($sql) as $row) {
$usuario = $row[nome_usuario];
$senha = $row[senha];
}

if($usuario == $user and $pass == md5($senha)) {		
	$_SESSION['usuario'] = $user;
	$_SESSION['senha'] = $pass;
	echo'
    <script>
        alert("Acesso Liberado!");
        window.location.href = "../index.html";
    </script>
    ';
} else {
	/*unset ($_session['$user'];
	unset ($_session['$pass'];*/
	echo "Usuario ou senha incorretos, <a href='../formulario/form_login.php'>tente novamente</a>";
}
}catch(PDOException $ex_){
    echo 'Erro '.$ex_->getMessage();
}
?>
