<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Dados para o Plano Básico</title>
</head>
<body>
    <h1>Cadastro Dados para o Plano Básico</h1>

    <form action="../controle/cadastrarAtividade.php" method="get">

</br>
            <label for="nome">Nome</label> </br>
            <input type="varchar" name="nome" id="nome">
</br>

            <label for="desc">Email</label></br>
            <input type="varchar" name="email" id="email">
</br>
            <label for="nota">Senha</label> </br>
            <input type="varchar" name="senha" id="senha">
</br>
                        
            <label for="data">Endereco</label></br>
            <input type="varchar" name="endereco" id="endereco">

</br>
            
        <label for="forma_pagamento">Forma de pagamento</label></br>
         <select name="forma_pagamento" id="forma_pagamento">
            <option value="Boleto">Boleto</option>
            <option value="Debito">Debito</option>
            <option value="Credito">Credito</option>
            <option value="PIX">PIX</option>
        </select>

        <input type="submit" name="enviar" value="Enviar"/>

    </form>
</body>
</html>
