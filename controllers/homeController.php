<?php

class homeController extends controller {

	public function __construct() {
	}

	public function index() {
		$data = array();
		$u = new usuarios();
		$c = new cinema();

		if(isset($_SESSION['cinemando']) && !empty($_SESSION['cinemando'])) {
			$data['user_data'] = $u->user_data($_SESSION['cinemando']);
		}

		$limit = 112;
		$data['get_filmes'] = $c->getFilmes($limit);
		
		if(isset($_POST['id'])) {
			
			$id_filme = $_POST['id'];
			$novo = $data['get_filme_info'] = $c->get_filme_info($id_filme);
			echo json_encode($novo);
		}

		$this->loadTemplate('home', $data);
	}
}