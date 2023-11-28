<?php
/*$cont = 1;
while($cont <=10){
    $n = rand (0,15);
    echo "$n <br>";
    $cont++;
}*/
/* uma eleição com 18 votos;
dois candidatos (1 e 2);
contar a quantidade de votos;
informar o ganhador;*/
/*$cont=1;
$cand1 = 0;
$cand2 = 0;
while ($cont <= 18){
    $voto = rand (1,2);
    if ($voto== 1){
        $cand1++;
    }
    else{
        $cand2++;
    }
    $cont++;
}
echo "Candidato 1: $cand1 <br> Candidato 2: $cand2";*/
/* Chico tem 1,50 metro e cresce 2 centímetros por ano, enquanto Zé tem 1,10 metro e cresce 3 centímetros por ano. Quantos anos serão necessários para que Zé seja maior que Chico?*/
$Chico = 150;
$Zé = 110;
$ano = 0;
while ($Zé <= $Chico){
    $Chico += 2;
    $Zé += 3;
    $ano++;
}
echo "Será necessário $ano anos para Zé ser maior que Chico";

?>