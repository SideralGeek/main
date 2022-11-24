<?php
	//include_once("modelo/ContatoDAO_class.php");	
	class plano_basico{
			
            public $id;
            public $nome;
            public $email;
            public $senha;
            public $endereco;
            public $forma_pagamento;

            public function __construct($id, $nome, $email, $senha, $endereco, $forma_pagamento){

            $this->id = $id;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->endereco = $endereco;
            $this->forma_pagamento = $forma_pagamento;

			}
		}
?>
