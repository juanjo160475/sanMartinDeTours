<?php 
require_once 'model/modelo.php';
    
    class cursosModel extends Modelo{  

	

	public function __construct() {
        $this->table = 'curso';
	}
/* Save note */
public function save($param,$archivo){
    $this->getConection();

    /* Set default values */
    $id = $titulo = $descripcion = $fechaInicio = $fechaFinal= $idImagen=$idSede="";

    /* Check if exists */
    $exists = false;
    if(isset($param["id"]) and $param["id"] !=''){
        $actualNote = $this->getNoteById($param["id"]);
        if(isset($actualNote["id"])){
            $exists = true;	
            /* Actual values */
            $id = $param["id"];
            $idImagen = $actualNote["id_imagen"];
            $idSede = $actualNote["id_sede"];
            $titulo = $actualNote["titulo"];
            $descripcion = $actualNote["descripcion"];
            $fechaInicio = date("yy/m/d", strtotime($actualNote['fechaInicio']));
            $fechaFinal =date("yy/m/d", strtotime($actualNote['fechafinal']));
        }
    }

    /* Received values */
    if(isset($param["id_imagen"])) $idImagen= $param["id_imagen"];
    if(isset($param["id_sede"])) $idSede = $param["id_sede"];
    if(isset($param["titulo"])) $titulo = $param["titulo"];
    if(isset($param["descripcion"])) $descripcion = $param["descripcion"];
    if(isset($param["fechaInicio"])) $fechaInicio = date("yy/m/d", strtotime($param['fechaInicio']));
    if(isset($param["fechaFinal"])) $fechaFinal = date("yy/m/d", strtotime($param['fechaFinal']));
   

    /* Database operations */
    if($exists){
                     
        $sql = "UPDATE ".$this->table. " SET id_imagen=?, id_sede=?, titulo=? ,
        descripcion=? ,fechaInicio=? ,fechafinal=? WHERE id=?";
        $stmt = $this->conection->prepare($sql);
        $res = $stmt->execute([$idImagen, $idSede, $titulo, $descripcion,$fechaInicio,$fechaFinal]);
      //  echo $stmt->errorCode();
    }else{
        
       

        $sql = "INSERT INTO ".$this->table. " (id_imagen, id_sede, titulo ,
        descripcion, fechaInicio, fechafinal) values(?, ?, ?,?,?,?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$idImagen, $idSede, $titulo, $descripcion,$fechaInicio,$fechaFinal]);
      //  echo $stmt->errorCode();
        $id = $this->conection->lastInsertId();
        
    }	

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
    //echo $stmt->errorCode();
   
     return $stmt->fetchAll();
}



	

}

?>