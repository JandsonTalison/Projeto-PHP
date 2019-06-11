<?php
require_once 'Usuario.class.php';
$u = new Usuario;

?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Projeto Login</title>
	<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div id="form">
	<h1>Login</h1>
	<form method="POST"7>
		<input type="email" name="email" placeholder="Username" maxlength="40">
		<input type="password" name="senha" placeholder="Password" maxlength="32">
		<input type="submit" value="ACESSAR"> 
		<a href="cadastro_usuario.php">Não possui cadastro? <strong>Cadastre-se aqui!</strong></a>
	</form>
</div>

<?php

if(isset($_POST['email'])){
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if(!empty($email) && !empty($senha)){
		$u->conectar("projeto_login","localhost","root","");
		if($u->msgErro==""){

		
			if($u->logar($email,$senha)){
				header("location: pagina_autenticada.php");
			}
			else{
				?>
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div>
				<?php
			}

		}
		else{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
			</div>
			<?php
		}
	}
	else{
		?>
		<div class="msg-erro">
			Preencha todos os campos!
		</div>
		<?php
	}
}		

?>

</body>

</html>