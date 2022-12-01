<?php 

    include_once "atividade.php"; //a classe atividade

    //coletar o dado que veio via GET

    $id_basico = $_GET["id_basico"];
    //vamos buscar os dados da atividade
    $sql = "SELECT * FROM atividade WHERE id_basico = $id_basico";

    $con = mysqli_connect("localhost", "root", "vertrigo", "ra");

    $dados = mysqli_query($con, $sql);

    $a = mysqli_fetch_array($dados);

    $atividade = new Atividade($a["id_basico"], $a["nome"], $a["email"], $a["senha"], $a["endereco"], $a["forma_pagamento"]);

?>