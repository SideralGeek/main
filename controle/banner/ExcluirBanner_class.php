<?php

	include_once("modelo/ContatoDAO_class.php");
	
	class ExcluirContato{
	
		public function __construct(){
			
			if(isset($_GET["conf"])){
			
				if($_GET["conf"] == "sim"){
				
					$dao = new ContatoDAO();
					$cont = $dao->exibir($_GET["id"]);
					unlink($cont->getFoto());
					$dao->excluir($cont);
					$status = "O contato " . $cont->getNome() . " foi excluído com sucesso";
					
					$lista = $dao->listar();
					include_once("visao/listaContato.php");
				}
			} else{
			
				$dao = new ContatoDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/pagAutorizaExcluir.php");	
			
			}
		}
	}

?>
