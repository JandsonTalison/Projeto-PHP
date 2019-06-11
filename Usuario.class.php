<?php


class Usuario{

	private $conexao;
	public $msgErro = "";

	public function conectar($dbname,$hostadress, $user, $password){
		global $conexao;
		try {
			$conexao = new PDO("mysql:dbname=".$dbname.";host=".$hostadress,$user,$password);	
		} catch (PDOException $e) {
			$msgErro = $e->getMessage();
		}
		

	}

	public function cadastrar($nome,$email,$senha){
		global $conexao;
		$sql = $conexao->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");

		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount()>0){
			return false;
		}
		else{
			$sql = $conexao->prepare("INSERT INTO usuarios(nome,email,senha) VALUES(:n, :e, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			return true;
		}


	}

	public function logar($email,$senha){
		global $conexao;

		$sql = $conexao->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount()>0){
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true;
		}
		else{
			return false;
		}

	}

}



?>