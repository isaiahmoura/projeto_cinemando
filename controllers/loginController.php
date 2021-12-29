<?php

class loginController extends controller {

	public function __construct() {
        $u = new usuarios();
        $u->logado();
	}

	public function index() {
		$data = array();
		$u = new usuarios();
        unset($_SESSION['erro_box']);

        if(isset($_POST['login'])) {
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));
            if(!empty($email) && !empty($senha)) {
                $u->login($email,$senha);
            }else {
                
                $_SESSION['erro_box'] = 'Preencha todos os campos';
            }
        }

		$this->loadTemplate('login', $data);
	}
}