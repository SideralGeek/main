<?php

    //os campos enviados via method get
    //serão colocados no array _GET
    //mudar se fosse post

    $nome = $_GET["nome"];
    $email = $_GET["email"];
    $senha = $_GET["senha"];
    $endereco = $_GET["endereco"];
    $forma_pagamento = $_GET["forma_pagamento"];

    $con = mysqli_connect ("localhost", "root", "vertrigo", "ra");
    //Conectando com o banco de 
    //IP do servidor de MySQL, locxalhost é a máquina local
    //IP local - localhost ou 127.0.0.1
    //login, senha e nome do banco

    //Agora testaremos se a conexao foi feita
    if(!$con) {
        die("Falha na conexão : " . mysqli_connect_error());
    } else {
        echo"Conexão realizada com sucesso. </br> </br>";
    }

    $dados = mysqli_query($con, "SELECT * FROM atividade");
    //matriz de resultado

    echo "<ul>";
    
    while($a = mysqli_fetch_array ($dados)) {
        $nome= $a["nome"];
        $email = $a["email"];

        echo "<li>";
        echo "Pessoa com o $nome e seguinte email: $email";
        echo "</li>";

    }

    echo "</ul>";

    $sql = "INSERT INTO atividade (nome, email, senha, endereco, forma_pagamento) VALUES ('$nome', '$email', '$senha', '$endereco', '$forma_pagamento')";

    $resultado = mysqli_query ($con, $sql);

    echo "Nome $nome email $email";
    echo "endereco $endereco";
     //Nota $nota";
   // echo "Data $data";

?>