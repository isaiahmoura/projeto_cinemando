<?php

class usuarios extends model {
	

	public function get_ser_data($uid) {
		$array = array();

		$sql = "SELECT * FROM usuarios WHERE id = '$uid'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array;
	}

	public function loggedOn() {
		if(!isset($_SESSION['node']) && empty($_SESSION['node'])) {
			header("Location: ".BASE_URL."home");
		}
	}

	public function login($email,$senha) {

		$sql = "SELECT email FROM usuarios WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			
			$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
			$sql = $this->db->query($sql);

			if($sql->rowCount() > 0) {
				$data = $sql->fetch();
				$_SESSION['node'] = $data['id'];
				//print_r(($_SESSION['node']));exit;
				header("Location: ".BASE_URL."home");
			}else {
				$_SESSION['erro_box'] = 'Senha incorreta.';
			}

		}else {
			$_SESSION['erro_box'] = 'E-mail inexistente.';
		}
	}

	public function cadastro($nome,$email,$senha,$confirmar_senha) {
		
		$sql = "SELECT * FROM usuarios WHERE email = '$email'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() == 0) {
			if($confirmar_senha != $senha) {
				$_SESSION['erro_box'] = 'Senha e confirmar senha não coincidem';
			}else {
				$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
				$sql = $this->db->query($sql);

				if($sql->rowCount() > 0) {
					$sql = "SELECT id FROM usuarios WHERE email = '$email'";
					$sql = $this->db->query($sql);

					if($sql->rowCount() > 0) {
						$uid = $sql->fetch();
						$_SESSION['node'] = $uid['id'];
						header("Location: ".BASE_URL."home");
					}
				}
			}
		}else {
			$_SESSION['erro_box'] = 'E-mail já esta cadastrado';
		}


	}

}