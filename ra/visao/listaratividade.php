<html>
<head>
    <meta charset="UTF-8">
    <title>Listar Usuários do Plano Básico</title>
</head>
<body>
    <?php
        include_once "../controle/controleListar.php";
        include_once "../controle/atividade.php";
    ?>
    <h1> Listar Usuários do Plano Básico</h1>
    <a href ="cadastrar.php">
         <img src = "./imagens/editar.png" width ="30px" heigth ="25px">
    </a>

    <table border = "2">
        <tr>
            <th> id_basico </th>
            <th> nome </th>
            <th> email </th>
            <th> senha </th>
            <th> endereco </th>
            <th> forma_pagamento </th>
            <th> alterar </th>
            <th> excluir </th>
        </tr>
    <?php
         foreach($lista as $i=>$atividade) {
            $i++;
            //as trate da seguinte forma
            echo "<tr>";
            echo "<td>" . $atividade->id_basico ."</td>";
            echo "<td>" . $atividade->nome . "</td>";
            echo "<td>" . $atividade->email . "</td>";
            echo "<td>" . $atividade->senha . "</td>";
            echo "<td>" . $atividade->endereco . "</td>";
            echo "<td>" . $atividade->forma_pagamento . "</td>";
            echo "<td align='center'>
            <a href='alterar.php?.id=". $atividade->id_basico ."'>
            <img src ='imagens/update.png' width='25'>
            </a>
            </td>";
            echo "<td align='center'> 
            <a href='excluir.php?.id=". $atividade->id_basico ."'>
            <img src ='imagens/excluir.png' width ='25'> 
            </a>
            </td>";
            echo "</tr>";
        }
     ?>
    </table>
  </body>
</html>