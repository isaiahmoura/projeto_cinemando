<?php

class ajaxController extends controller {

	public function __construct() {
	}

    public function delete_filme_crud() {
        if(isset($_POST['id'])) {
            $c = new cinema();
            $filme_id = $_POST['id'];
            $c->delete_filme_crud($filme_id);
        }
    }
}