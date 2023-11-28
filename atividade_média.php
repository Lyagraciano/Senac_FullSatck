<?php
/*analisar um conjunto de médias de notas de alunos:
verificar se:
    aprovado >= 7; recuperação >=4; reprovado <4;
    conjunto de 15 médias. (utilizar FOR) */ 
    $aprovado = $recuperacao = $reprovado = 0;
    for ($cont=1; $cont <= 15; $cont++){;
    $nota = rand (0,10);
    if ($nota >= 7){
        $aprovado++;
        echo "Aprovado. Nota: $nota <br> ";
    }
    else if ($nota >= 4){
        $recuperacao++;
        echo "Recuperação. Nota: $nota <br> ";
    }
    else {
        echo "Reprovado. Nota: $nota <br>";
        $reprovado++;
    }
}
    echo "Aprovados: $aprovado <br>
     Recuperação: $recuperacao <br>
     Reprovados: $reprovado";

?>