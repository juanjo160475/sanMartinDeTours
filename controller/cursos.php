<?php 


require_once 'controller/controlador.php';
require_once 'model/cursosModel.php';

class cursosController extends Controlador {
	

	

	public function __construct() {
		$this->vista = 'cursos';
		$this->titulo_pagina = '';
		$this->noteObj = new cursosModelo();
	}

	

	public function save(){
		$this->vista = 'edit_note';
		$this->titulo_pagina = 'Editar nota';
		$id = $this->noteObj->save($_POST, $_FILES);
		$result = $this->noteObj->getNoteById($id);
		$_GET["response"] = true;
		return $result;
	}

	public function mostrar_formulario (){
		$this->vista = 'administrador/editCursos';
		return $this->list();

	}
}
?>