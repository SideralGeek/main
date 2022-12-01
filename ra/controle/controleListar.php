<?php
    include_once "atividade.php";

    $conexao = mysqli_connect("localhost", "root", "vertrigo", "ra");
    $dados = mysqli_query($conexao, "SELECT * FROM atividade");
    //matriz de resultado

    $lista = array();

    while($a = mysqli_fetch_array($dados)) {
        //listar todas atividades

        /*
        $id = $a["id"];
        $disciplina = $a["disciplina"];
        $tema = $a["tema"];
        $descricao = $a["descricao"];
        $nota = $a["nota"];
        $data = $a["data"];
        */

        //guardei os dados da linha em variáveis
        //agora criação de uma instância de animal

        $atividade = new Atividade($a["id_basico"], $a["nome"], $a["email"], $a["senha"], $a["endereco"], $a["forma_pagamento"]);

        //criar uma lista com todas as atividades
        //cada animal será um objeto da classe Atividade;

        $lista[] = $atividade;
    }
?>