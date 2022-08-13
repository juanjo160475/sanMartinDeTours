<?php 
require_once 'model/modelo.php';
    
    class imagenModel extends Modelo{  

	

	public function __construct() {
        $this->table = 'imagen';
	}
/* Save note */
public function save($param,$archivo){
    $this->getConection();

    
        
        // mueve la imagen de la carpeta temporal al directorio 
        $nombre_imagen =$archivo['imagen']['name'];
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] .'/fundacion/assets/img/cursos/';
        $temporal =$archivo ['imagen']['tmp_name'];
        move_uploaded_file ($temporal,$carpeta_destino.$nombre_imagen);

        $sql = "INSERT INTO ".$this->table. " (nombreImagen) values(?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$nombre_imagen]);
       // echo $stmt->errorCode();
        $id = $this->conection->lastInsertId();
        
    	

    return $id;	

}
// lee los cursos para mostrarlos al usuario 
   public function getCursos(){
    $this->getConection();
    $sql = "SELECT * FROM curso
    INNER JOIN sede ON curso.id_sede = sede.id
     INNER JOIN imagen ON curso.id_imagen = imagen.id";
    $stmt = $this->conection->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}
     /* Delete imagen sobrreescribe*/
    public function deleteNoteById($id){
		
    $this->getConection();
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] .'/fundacion/assets/img/cursos/';
    $data = $this->getNoteById($id);
    $nombreArchivo = $data["nombreImagen"];
    unlink($carpeta_destino.$nombreArchivo);

    $sql = "DELETE FROM ".$this->table." WHERE id  = ?";
		$stmt = $this->conection->prepare($sql);
		return $stmt->execute([$id]);
   
}

	

}

?>