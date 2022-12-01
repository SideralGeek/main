<?php
	class Contato{
	//classe entidade	
		
		private $id;
		private $nome;
		private $email;
		private $telefone;
		private $foto;
		
		public function __construct(){
		}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function getNome(){
			return $this->nome;
		}
		public function setNome($n){
			$this->nome = $n;
		}
		
		public function getEmail(){
			return $this->email;
		}
		public function setEmail($e){
			$this->email = $e;
		}
		
		public function getTelefone(){
			return $this->telefone;
		}
		public function setTelefone($t){
			$this->telefone = $t;
		}
		
		public function getFoto(){
			return $this->foto;
		}
		public function setFoto($foto){
			$this->foto = $foto;
		}
	}

?>