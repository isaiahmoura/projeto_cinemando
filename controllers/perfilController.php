<?php

class perfilController extends controller {

	public function __construct() {
        $u = new usuarios();
	}

	public function index($uid) {
		$data = array();
		$u = new usuarios();

		if(isset($_SESSION['cinemando']) && !empty($_SESSION['cinemando'])) {
			$data['user_data'] = $u->user_data($_SESSION['cinemando']);
            $data['user_info'] = $u->user_info($uid);
		}

		$this->loadTemplate('perfil', $data);
	}

    public function funcoes_crud() {
        $data = array();
        
        $u = new usuarios();
		$c = new cinema();

		if(isset($_SESSION['cinemando']) && !empty($_SESSION['cinemando'])) {
			$data['user_data'] = $u->user_data($_SESSION['cinemando']);
			$data['getGeneros'] = $c->getGeneros();
			$data['get_filmes'] = $c->getFilmes_Crud();

			if(isset($_POST['finalizar_adicao'])) {
				$filme_titulo = addslashes($_POST['filme_titulo']);
				$filme_data = addslashes($_POST['filme_data']);
				$filme_img = addslashes($_POST['file_img']);
				$filme_generos = addslashes($_POST['filme_generos']);
				$extensao = pathinfo($_FILES['file_img']['name'], PATHINFO_EXTENSION);
				//var_dump($extensao);exit;
				
				if(!empty($filme_titulo) && !empty($filme_data)) {
					$c->filme_adicao(
						$filme_titulo,
						$filme_data,
						$filme_img,
						$filme_generos
					);
				}else {
					echo 'Preencha todo os campos';
				}
			}
		}

        $this->loadTemplate('funcoes_crud', $data);
    }
}