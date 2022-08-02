<?php 
require_once 'model/modelo.php';
    
    class cursosModelo extends Modelo{  

	

	public function __construct() {
        $this->table = 'curso';
	}
/* Save note */
public function save($param,$archivo){
    $this->getConection();

    /* Set default values */
    $titulo = $descripcion = $nombreFoto = "";

    /* Check if exists */
    $exists = false;
    if(isset($param["id"]) and $param["id"] !=''){
        $actualNote = $this->getNoteById($param["id"]);
        if(isset($actualNote["id"])){
            $exists = true;	
            /* Actual values */
            $id = $param["id"];
            $titulo = $actualNote["titulo"];
            $descripcion = $actualNote["descripcion"];
            $nombreFoto = $actualNote["foto"];
        }
    }

    /* Received values */
    if(isset($param["titulo"])) $titulo= $param["titulo"];
    if(isset($param["descripcion"])) $descripcion = $param["descripcion"];
    if(isset($param["nombreFoto"])) $nombreFoto = $param["nombreFoto"];
    

    /* Database operations */
    if($exists){
        
        // si la imagen existe la mueve a la carpeta del servidor
        if($archivo['imagen']['size']> 0 ) {
        $nombreFoto =$archivo['imagen']['name'];
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] .'/fundacion/imagenes/inicio/';
        $temporal =$archivo ['imagen']['tmp_name'];
        move_uploaded_file ($temporal,$carpeta_destino.$nombreFoto);
        // borra la imagen anterior devuelve true en caso de exito
        unlink($carpeta_destino.$actualNote['foto']);
            }
                    
        $sql = "UPDATE ".$this->table. " SET titulo=?, descripcion=?, foto=? WHERE id=?";
        $stmt = $this->conection->prepare($sql);
        $res = $stmt->execute([$titulo, $descripcion, $nombreFoto, $id]);
        echo $stmt->errorCode();
    }else{
        
        // mueve la imagen de la carpeta temporal al directorio 
        $nombre_imagen =$archivo['imagen']['name'];
        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] .
        '/fundacion/imagenes/inicio/';
        $temporal =$archivo ['imagen']['tmp_name'];
        move_uploaded_file ($temporal,$carpeta_destino.$nombre_imagen);

        $sql = "INSERT INTO ".$this->table. " (titulo,descripcion,foto) values(?, ?, ?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$titulo, $descripcion,$nombre_imagen]);
        echo $stmt->errorCode();
        $id = $this->conection->lastInsertId();
        
    }	

    return $id;	

}
// lee los cursos para mostrarlos al usuario 
   public function getCursos(){
    $this->getConection();
    $sql = "SELECT * FROM curso
    INNER JOIN sede ON curso.id_sede = sede.id_sede
     INNER JOIN imagen ON curso.id_imagen = imagen.id_imagen";
    $stmt = $this->conection->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll();
}


	

}

?>