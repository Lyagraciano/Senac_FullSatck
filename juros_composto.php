<?php
/* juros simples -> juros composto
c= capital (100)
i = taxa (0.1)
t = tempo (10)
*/ 
$capital = 100;
$taxa = 0.1;
$tempo = 1;
echo "Saldo: $capital <br>";
while ($tempo <=10){
    $juros = $capital * $taxa;
    $m = $capital + $juros;
    echo "Saldo $m <br>";
    $capital = $m;
    $tempo++;
}
?>