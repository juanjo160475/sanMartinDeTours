<?php 

abstract class Modelo{

	
	public  $table = '';
	public $conection;
	

	/* Set conection */
	public function getConection(){
		$dbObj = new Db();
		$this->conection = $dbObj->conection;
	}

	/* Get all notes recibe como argumento la tabla*/
	public function getNotes(){
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table;
		$stmt = $this->conection->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	/* Get note by id , id para buscar y idcol es el nombre de la columna donde buscar*/
	public function getNoteById($id){
		if(is_null($id)) return false;
		$this->getConection();
		$sql = "SELECT * FROM ".$this->table." WHERE id = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$id]);
		return $stmt->fetch();
	}

	/* Save note */
	/*public function save($param,$archivo){
		
    }	*/

		

	/* Delete note by id */
	public function deleteNoteById($id){
		
		$this->getConection();
		$sql = "DELETE FROM ".$this->table." WHERE id  = ?";
		$stmt = $this->conection->prepare($sql);
		$stmt->execute([$id]);
		var_dump ($stmt->errorInfo());
		return $stmt->errorCode();
	}

	public function setTable ($nombreTabla){
		$this->table=$nombreTabla;

	}

}

?>