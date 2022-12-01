<?php

	
	include_once("modelo/ContatoDAO_class.php");
	
	class ListarContato{
	
		public function __construct(){
			//****** acessar o modelo
			$dao = new ContatoDAO();
			//iniciou a conexão com o BD
			$lista = $dao->listar();
			
			//vou passar a lista para a visão
			//****** acessar a visão
			include_once("visao/listaContato.php");		
		}
	}

?>