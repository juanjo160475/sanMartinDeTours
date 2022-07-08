<?php 

require_once 'model/loginModel.php';
require_once 'controller/controlador.php';
class loginController extends Controlador {
	

	

	public function __construct() {
		//$this->vista = 'inicio';
		//$this->titulo_pagina = '';
        $this->noteObj = new loginModelo ();
		
	}

    public function compruebaLogin(){
	 
      $resultado =  $this->noteObj->compruebaUsuario($_POST);
      if ($resultado != 0){
       
       
        $this->vista = 'prueba';
        session_start();
        $_SESSION ["usuario"] = $_POST["correo"];
        

      }else {
        $this->vista = 'inicio';
      }
    
	}


}
?>