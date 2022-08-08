<?php
//variaveis principais
$sp     = 67836.43;
$rj     = 36678.66;
$mg     = 29229.88;
$es     = 27165.48;
$outros = 19849.53;



// calculo
$soma   = ($sp + $rj + $mg + $es + $outros);


//porcentagem de cada variavel
$porcSp     = ((($sp*100)/$soma));
$porcRj     = ((($rj*100)/$soma));
$porcMg     = ((($mg*100)/$soma));
$porcEs     = ((($es*100)/$soma));
$porcOutros = ((($outros*100)/$soma));
// mostrar os resultados
echo " A soma mensal é: ".$soma. "</br>"; 
echo "</br>";
echo "A porcentagem de SP é: ".number_format($porcSp,2)."% </br>";
echo "</br>";
echo "A porcentagem de RJ é: ".number_format($porcRj,2)."% .</br>";
echo "</br>";
echo "A porcentagem de MG é: ".number_format($porcMg,2)."%.</br>";
echo "</br>";
echo "A porcentagem de ES é: ".number_format($porcEs,2)."%</br>";
echo "</br>";
echo "A porcentagem dos OUTROS é: ".number_format($porcOutros,2)."%</br>";

?>