<?php
//criar uma matriz que represente um conjunto de 4 times. Cada time terá pontuação de acordo com o resultado do jogo, verifique a pontuação final de cada um.
//          [linha][coluna]
$times = array(
    array (3, 1, 1), //0 é derrota, 1 empate, 3 vitória.
    array (1, 1, 3),
    array(1, 3, 0),
    array(0, 0, 1)
);
$pontuacao = 0;
for ($i = 0; $i < 4; $i++) {
    $pontuacao = $times[$i][0] + $times[$i][1] + $times[$i][2];
      echo $pontuacao . "<br>"; //para fazer o calculo de todos, o echo precisa tá dentro do for
}




?>