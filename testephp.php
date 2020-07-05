<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <title>Formulario de inscrição</title>
</head>
<body>
    <p>FORMULARIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <FORM action="script.php" method= "post">
    <?php

    $mensagemDeSucesso = isset($_SESSION['mensagem de sucesso'])?$_SESSION['mensagem de sucesso']

    if (!empty($mensagemDeSucesso))
    {
        echo $mensagemDeSucesso;
    }
    $mensagemDeErro = isset($_SESSION['mensagem de Erro'])?$_SESSION['mensagem de Erro']

    if (!empty($mensagemDeErro))
    {
        echo $mensagemDeErro;
    }

    ?>

    <p>seu nome: <input type="text" name = 'nome'/></p>
    <p>sua idade: <input type="text" name = 'idade'/></p>

    <p><input type="submit"value ="envia dados dos competidores"/></p>
    
    
    
    
    </FORM>
</body>
</html>