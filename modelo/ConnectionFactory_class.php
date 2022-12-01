<?php
	class ConnectionFactory{
		public $con = null;
		public $dbType = "mysql";
		public $host = "localhost";
		public $user = "root";
		public $senha = "vertrigo";
		public $db = "agenda";
		public $persistente = false;
		
		public function __construct($persistente = false){
			if($persistente != false){
				$this->persistente = true;
			}
		}
		
		public function getConnection(){
			try{
				//Persistent Data Object
				//Persistência de dados - manipular BD 
				$this->con = new PDO(
					$this->dbType.":host=".$this->host.";dbname=".$this->db,
					$this->user,
					$this->senha,
					array(PDO::ATTR_PERSISTENT => $this->persistente, 
						PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
				);
				return $this->con;
			}
			catch(PDOException $ex){
				
				echo "Erro: " . $ex->getMessage();
				
				
			}
		}
	
		public function close(){
			if($this->con != null){
				$this->con = null;
			}
		}
	
	}
	

?>