<?php 


require_once 'controller/controlador.php';
require_once 'model/cursosModel.php';
require_once 'model/sedeModelo.php';

class cursosController extends Controlador {
	

	
   //SE CARGA LA VISTA PARA EL PUBLICO EN GRAL
	public function __construct() {
		$this->vista = 'cursos';
		$this->titulo_pagina = '';
		$this->noteObj = new cursosModelo();
	}

	

	
	
	/*carga la pagina listar cursos para el edministrador , se muestran las tablas por separado*/ 
	public function mostrar_formulario (){
		$this->vista = 'administrador/listCursos';
		$data ["cursos"] = $this->noteObj->getNotes();
		$this->noteObj->setTable("sede");
		$data ["sedes"] = $this->noteObj->getNotes();
		$this->noteObj->setTable("imagen");
		$data ["imagenes"] =$this->noteObj->getNotes();;
	
		return $data;

	}

	public function editSede ($id=null){
		$this->titulo_pagina = 'Editar Sede';
		$this->vista = 'administrador/formularioSede';
		$this->noteObj = new sedeModelo();
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->noteObj->getNoteById($id,"id_sede");
	}
//sobreescribe el padre probisorio
    public function confirmDelete(){
		$this->titulo_pagina = 'Eliminar nota';
		$this->vista = 'confirm_delete_note';
		$this->noteObj = new sedeModelo();
		return $this->noteObj->getNoteById($_GET["id"],"id_sede");
	}

	  public function deleteSede(){
		$this->titulo_pagina  = '';
        $this->vista = 'delete_note';
		$this->noteObj = new sedeModelo();
		return $this->noteObj->deleteNoteById($_POST["id"],"id_sede");
	}
	// save sede y cursos SEPARA ESTO EN CONTROLADORES PARA CADA UNO PONER ARGUMENTO A ELIMINAR Y BUSCAR POR ID 
	public function save(){
		$this->vista = 'administrador/formularioCursos';
		$this->titulo_pagina = 'Formularios';
		$modelo= $_POST ["model"];
		$this->noteObj = new $modelo();
		$id = $this->noteObj->save($_POST);
		$result = $this->noteObj->getNoteById($id,"id_sede");
		$_GET["response"] = true;
		return $result;
	}
	
	
}
?>