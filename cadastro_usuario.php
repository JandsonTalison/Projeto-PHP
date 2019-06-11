<!DOCTYPE html>

<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Projeto Login</title>
	<link rel="stylesheet" href="estilo.css">
</head>

<body>

<div id="form">
	<h1>Cadastro</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome completo" maxlength="40">
		<input type="email" name="email" placeholder="Username" maxlength="40">
		<input type="password" name="senha" placeholder="Password" maxlength="32">
		<input type="password" name="confsenha" placeholder="Confirmar Senha" maxlength="32">
		<input type="submit" value="CADASTRAR"> 
	</form>
</div>

<?php

require_once 'Usuario.class.php';

$u = new Usuario;

if(isset($_POST['nome'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirmarSenha = $_POST['confsenha'];

	if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarSenha)){
		$u->conectar("projeto_login","localhost","root","");
		if($u->msgErro==""){
			if($senha==$confirmarSenha){
				if($u->cadastrar($nome,$email,$senha)){
					?>
					<div id="msg-sucesso">
						Cadastrado com sucesso!	
					</div>
					
					<?php
				}else{
					?>

					<div class="msg-erro">
						Email já cadastrado!
					</div>

					<?php
					
				}
			}
			else{
				?>

					<div class="msg-erro">
						Senha e confirmar senha não correspondem
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