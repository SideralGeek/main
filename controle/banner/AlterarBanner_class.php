<?php
	include_once("modelo/ContatoDAO_class.php");
	
	class AlterarContato{
		public function __construct(){		
			if(isset($_POST["enviar"])){
				//formulário enviar foi enviado
				
				$c = new Contato();
				$c->setId($_POST["id"]);
				$c->setNome($_POST["nome"]);
				$c->setEmail($_POST["email"]);
				$c->setTelefone($_POST["telefone"]);
				
				$dao = new ContatoDAO();
				$dao->alterar($c);
				
				$status = "Alteração do Contato " . $c->getNome() . " efetuada com sucesso";
				
				$lista = $dao->listar();
				
				include_once("visao/listaContato.php");
				
			} else{
			
				$dao = new ContatoDAO();
				$cont = $dao->exibir($_GET["id"]);
				include_once("visao/formAlteraContato.php");	
			
			}
		}
	}

?>
