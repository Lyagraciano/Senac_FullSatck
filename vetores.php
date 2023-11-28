<?php
$soma = 0;
$numero = [7, 8, 9, 2, 6, 4, 1, 0, 10, 3]; //a posição inicial é 0.
for ($i = 0; $i < 10; $i++){ // o $i = 0 é pq a posição começa do 0 e não do 1, como das outras vezes.
$soma += $numero[$i];
echo "$numero[$i]<br>";
}
echo "Soma: $soma <br>";
?>