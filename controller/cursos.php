<?php 


require_once 'controller/controlador.php';
require_once 'model/cursosModel.php';
require_once 'model/sedeModelo.php';
require_once 'model/imagenModel.php';


class cursosController extends Controlador {
	

	
   //SE CARGA LA VISTA PARA EL PUBLICO EN GRAL
	public function __construct() {
		$this->vista = 'cursos';
		$this->titulo_pagina = '';
		$this->noteObj = new cursosModel();
	}

	

	
	/*carga la pagina listar cursos para el edministrador , 
	se muestran las tablas por separado*/ 
	
	
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
		return $this->noteObj->getNoteById($id);
	}
	public function editImagen ($id=null){
		$this->titulo_pagina = 'Editar Imagen';
		$this->vista = 'administrador/formularioImagen';
		$this->noteObj = new imagenModel();
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->noteObj->getNoteById($id);
	}

	public function editCurso ($id=null){
		$this->titulo_pagina = 'Editar Sede';
		$this->mostrar_formulario();
		$this->noteObj = new cursosModel();
		if(isset($_GET["id"])) $id = $_GET["id"];
		return $this->noteObj->getNoteById($id);
	}
//sobreescribe el padre 
    public function confirmDelete(){
		$this->titulo_pagina = 'Eliminar nota';
		$this->vista = 'confirm_delete_note';
		$modelo= $_GET ["model"];
		$this->noteObj = new $modelo();
		return $this->noteObj->getNoteById($_GET["id"]);
	}
	//sobreescribe el padre
        public function delete(){
		$this->titulo_pagina  = '';
        $this->vista = 'delete_note';
		$modelo= $_GET ["model"];
		$this->noteObj = new $modelo();
		return $this->noteObj->deleteNoteById($_POST["id"]);
	}
	
	public function save(){
		$this->vista = 'administrador/formularioImagen';
		$this->titulo_pagina = 'Formularios';
		$modelo= $_POST ["model"];
		$this->noteObj = new $modelo();
		$id = $this->noteObj->save($_POST,$_FILES);
		$result = $this->noteObj->getNoteById($id);
		$_GET["response"] = true;
		return $result;
	}
	
	
}
?>