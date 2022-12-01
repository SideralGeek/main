<?php
    class Atividade {
        //por padrão o nome das classes começam com letra maiúscula

        //jogado, sem estar organizado

        public $id_basico;
        public $nome;
        public $email;
        public $senha;
        public $endereco;
        public $forma_pagamento;

        public function __construct($id_basico, $nome, $email, $senha, $endereco, $forma_pagamento) {

        //gaveta, guardado, organizado

            $this->id_basico = $id_basico;
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
            $this->endereco = $endereco;
            $this->forma_pagamento = $forma_pagamento;

        }

    }
?>