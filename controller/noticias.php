<?php 


require_once 'controller/controlador.php';
require_once 'model/noticiasModelo.php';

class noticiasController extends Controlador {
	

	

	public function __construct() {
		$this->vista = 'noticias';
		$this->titulo_pagina = '';
		$this->noteObj = new noticiasModelo();
	}

	public function save(){
		$this->vista = 'edit_note';
		$this->titulo_pagina = 'Editar nota';
		$id = $this->noteObj->save($_POST, $_FILES);
		$result = $this->noteObj->getNoteById($id);
		$_GET["response"] = true;
		return $result;
	}

	
}
?>