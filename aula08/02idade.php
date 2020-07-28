<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
        $ano = isset($_GET["ano"])?$_GET["ano"]:"[nao informado]";
        $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[nao informado]";
        $idade = date("Y") - $ano;
        echo "$nome e $sexo e tem $idade anos";
    ?>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>