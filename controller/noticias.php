<?php 


require_once 'controller/controlador.php';
require_once 'model/noticiasModelo.php';

class noticiasController extends Controlador {
	

	

	public function __construct() {
		$this->vista = 'noticias';
		$this->titulo_pagina = '';
		$this->noteObj = new noticiasModelo();
	}

	

	
}
?>