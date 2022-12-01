<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Dados do Plano Básico</title>
</head>
<body>
     
<!-- Recebo o id que vem via get -->
    <?php
        include_once "../controle/alterarAtividade.php";
        //preparou um objeto chamado ativiadade que contêm todos os dados do registro selecionado para alteração
    ?>
    <form action="../controle/alterar2.php" method="get">

    <h1>Alterar Dados do Plano Básico</h1>

        </select>
</br>
            <label for="nome">Nome:</label> </br>
            <input type="char" name="nome" id="nome"
            value ="<?php echo $atividade->nome;?>">
</br>

            <label for="email">Email:</label></br>
            <input type="char" name="nome" id="nome"
            valuem = "<?php echo $atividade->email;?>">
</br>
            <label for="senha">Senha</label> </br>
            <input type="varchar" name="senha" id="senha"
            value ="<?php echo $atividade->senha;?>">
</br>
                        
            <label for="endereco"></label></br>
            <input type="varchar" name="endereco" id="data"
            value ="<?php echo $atividade->endereco;?>">

            <input type="hidden" name="id_basico"
    value="<?php echo $atividade->id_basico; ?>">

</br>

        <label for="disc"> Disciplina</label></br>
         <select name="forma_pagamento" id="forma_pagamento">
              <option value ="Boleto"
                    <?php
                        if($atividade->forma_pagamento == "Boleto") {
                            echo " selected";
                        }
                    ?>  
            > Boleto</option>
            <option value ="Debito"
                    <?php
                        if($atividade->forma_pagamento == "Debito") {
                            echo " selected";
                        }
                    ?>  

    > Debito </option>
            <option value ="Credito"
                    <?php
                        if($atividade->forma_pagamento == "Credito") {
                            echo " selected";
                        }
                    ?>              
                    
                >Credito</option>
                <option value ="PIX"
                            <?php
                                if($atividade->forma_pagamento == "PIX") {
                                    echo " selected";
                                }
                    ?>
             >PIX</option>
</br>
</br>
            <input type="submit" name="enviar" value="Enviar"/>

    </form>
</body>
</html>
