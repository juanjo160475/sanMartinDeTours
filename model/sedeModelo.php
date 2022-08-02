<?php 
require_once 'model/modelo.php';
    
    class sedeModelo extends Modelo{  

	

	public function __construct() {
        $this->table = 'sede';
	}
/* Save note */
public function save($param){
    $this->getConection();

    /* Set default values */
    $nombre = $direccion = $telefono = "";

    /* Check if exists */
    $exists = false;
    if(isset($param["id"]) and $param["id"] !=''){
        $actualNote = $this->getNoteById($param["id"],"id_sede");
        if(isset($actualNote["id_sede"])){
            $exists = true;	
            /* Actual values */
            $id = $param["id"];
            $nombre = $actualNote["nombre_sede"];
            $direccion = $actualNote["direccion"];
            $telefono = $actualNote["telefono"];
        }
    }

    /* Received values */
    if(isset($param["nombre"])) $nombre= $param["nombre"];
    if(isset($param["direccion"])) $direccion = $param["direccion"];
    if(isset($param["telefono"])) $telefono = $param["telefono"];
    

    /* Database operations */
    if($exists){
                     
        $sql = "UPDATE ".$this->table. " SET nombre_sede=?, direccion=?, telefono=? WHERE id_sede=?";
        $stmt = $this->conection->prepare($sql);
        $res = $stmt->execute([$nombre, $direccion, $telefono, $id]);
        echo $stmt->errorCode();
    }else{
        
       

        $sql = "INSERT INTO ".$this->table. " (nombre_sede,direccion,telefono) values(?, ?, ?)";
        $stmt = $this->conection->prepare($sql);
        $stmt->execute([$nombre, $direccion,$telefono]);
        echo $stmt->errorCode();
        $id = $this->conection->lastInsertId();
        
    }	

    return $id;	

}


	

}

?>