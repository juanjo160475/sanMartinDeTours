<?php 

require_once 'model/note.php';
require_once 'controller/controlador.php';

 class noteController extends Controlador {
	

	

	public function __construct() {
		$this->vista = 'inicio';
		$this->titulo_pagina = '';
		$this->noteObj = new Note();
	}
	

	/* Create or update note */
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