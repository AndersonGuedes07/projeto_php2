<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];;
        echo "<h1>Valores recebidos: $n1 e $n2 </h1>";
        $m = ($n1 + $n2) / 2;
        echo "A soma vale ". ($n1+$n2);
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>A modulo vale ". ($n1%$n2);
        echo "<br/>A média vale $m";
    ?>
</body>
</html>