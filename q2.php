<?php
$numDigitado = $_POST['numero'];
$num1 = 0;
$num2 = 1;
$num3 = 0;

while ($numDigitado > $num3){
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
}
if($numDigitado == 0 | $numDigitado == 1){
    echo ("O número " .$numDigitado. " está na sequencia de Fibonacci" );
}elseif($numDigitado = $num3){
    echo ("O número " .$numDigitado. " está na sequencia de Fibonacci" );
}else{
    echo("O número não está na sequencia ");
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 2</title>
</head>
<body>
<form action="" method="POST">
            <table>
              <tr>
                <td align="right">Digite um número:</td>
                <td>
                <input type="number" name="numero" id="numero"  size="85">
                </td>
                <td>
                 <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                </td>
               </tr>
</form>
</body>
</html>



