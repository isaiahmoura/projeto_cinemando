<?php

class homeController extends controller {

	public function __construct() {
	}

	public function index() {
		$data = array();
		$u = new usuarios();

		$this->loadTemplate('home', $data);
	}
}