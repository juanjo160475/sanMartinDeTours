<?php 
require_once 'model/modelo.php';
    
    class loginModelo extends Modelo{  

	

	public function __construct() {
		
	}

	

	/* comprueba el usuario contraseña */
	public function compruebaUsuario($param){
		$this->getConection();
        $this->table = 'administrador';
        //$sql = "SELECT * FROM .' $this->table' .WHERE MAIL= :correo AND PassWord = :pass" ;
        $sql = "SELECT * FROM administrador WHERE MAIL= :correo AND PassWord = :pass" ;
		$stmt = $this->conection->prepare($sql);
        $correo = htmlentities (addslashes($param["correo"]));
        $pass = htmlentities (addslashes($param["pass"]));
        $stmt -> bindValue(":correo",$correo);
        $stmt -> bindValue(":pass",$pass);
		$stmt->execute();
        return $stmt -> rowCount();

    }	

}

?>