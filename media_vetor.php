<?php 
$nota = [8, 7, 5, 4, 10];
$aprovado = $recuperacao = $reprovado = 0;
    for ($cont=0; $cont < 5; $cont++){;
   
    if ($nota [$cont] >= 7){
        $aprovado++;
        echo "Aprovado. Nota: $nota[$cont]<br> ";
    }
    else if ($nota [$cont] >= 4){
        $recuperacao++;
        echo "Recuperação. Nota: $nota[$cont] <br> ";
    }
    else {
        echo "Reprovado. Nota: $nota[$cont]<br>";
        $reprovado++;
    }
}
    echo "Aprovados: $aprovado <br>
     Recuperação: $recuperacao <br>
     Reprovados: $reprovado";

?>