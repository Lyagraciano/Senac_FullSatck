<?php

//criar uma matriz com as notas de 5 alunos. Cada aluno fez 3 provas e a média na instituição é 7. Calcule a média por aluno e verifique se ele foi aprovado.

$notas = array(
     array(4, 8, 9),
    array (10, 8, 9),
    array (4, 8, 1),
    array(4, 2, 9),
    array(10, 7, 9)
);

for ($i = 0; $i < 5; $i++){
$media = ($notas[$i][0] + $notas[$i][1] + $notas[$i][2])/3;
if($media>=7){
    echo "Aprovado com média $media <br>";
}else{
    echo "Reprovado com média $media <br>";
}
}
echo $media;

?>