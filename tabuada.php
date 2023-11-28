<?php
$numero = $_POST["num"];
$contador = 1;
while ($contador<11) {
    $resultado = $numero * $contador;
echo "$numero X $contador =  $resultado <br>";
$contador++;}
/*$numero = 7;
for($cont=1; $cont<11; $cont++){
    $resultado = $numero * $cont;
echo "$numero X $cont =  $resultado <br>";
}*/
?>