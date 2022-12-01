<?php
	class Banner{
	//classe entidade	
		
		private $id;
		private $email;
		private $usuario;
		private $senha;
		private $pacote;
		private $cor_solida;
		private $cor_imagem;
		private $frase;
		
		public function __construct(){
		}
		
		public function setId($id){
			$this->id = $id;
		}
		public function getId(){
			return $this->id;
		}

		
		public function setEmail($e){
			$this->email = $e;
		}
		public function getEmail(){
			return $this->email;
		}
		

		public function setUsuario($u){
			$this->usuario = $u;
		}
		public function getUsuario(){
			return $this->telefone;
		}
		
		
		public function setSenha($s){
			$this->senha = $s;
		}
		public function getSenha(){
			return $this->senha;
		}
		

		public function setPacote($p){
			$this->pacote = $p;
		}
		public function getPacote(){
			return $this->pacote;
		}


		public function setCor_Solida($cs){
			$this->cor_solida = $cs;
		}
		public function getCor_Solida(){
			return $this->cor_solida;
		}


		public function setCor_Imagem($ci){
			$this->cor_imagem = $ci;
		}
		public function getCor_Imagem(){
			return $this->cor_imagem;
		}


		public function setFrase($f){
			$this->frase = $f;
		}
		public function getFrase(){
			return $this->frase;
		}
	}

?>