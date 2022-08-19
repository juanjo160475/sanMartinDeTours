<?php 

require_once 'model/note.php';

abstract class  Controlador{
	
	public $titulo_pagina;
	public $vista;
	

	/* Lista toda  la tabla */
	public function list(){
		$this->titulo_pagina = '';
		$this->vista = "cursos";
		return $this->noteObj->getCursos();
	}

	/* recupera para editar */
	public function edit($id = null){
		$this->titulo_pagina = '';
		//$this->vista = 'edit_note';
		$this->vista = 'formularioCursos';
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->noteObj->getNoteById($id);
	}

	/* crear o update */
	public function save(){
		$this->vista = 'edit_note';
		$this->titulo_pagina = 'Editar nota';
		$id = $this->noteObj->save($_POST);
		$result = $this->noteObj->getNoteById($id);
		$_GET["response"] = true;
		return $result;
	}

	/* Confirmar  delete */
	public function confirmDelete(){
		$this->titulo_pagina = 'Eliminar nota';
		$this->vista = 'confirm_delete_note';
		return $this->noteObj->getNoteById($_GET["id"]);
	}

	/* Delete */
	public function delete(){
		$this->titulo_pagina  = 'Listado de notas';
		$this->vista = 'delete_note';
		$result =$this->noteObj->deleteNoteById($_POST["id"]);
		return $result;
	}

}

?>