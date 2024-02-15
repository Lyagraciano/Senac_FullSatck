<?php
//matriz 3x2

$produtos1 = array(
    // 0, 1
    /*0*/ array (4.50, 50),
    /*1*/ array (6.50, 30),
    /*2*/ array (4.00, 35)
);
//nome da matriz [linha][coluna]
$soma = 0;
for ($i = 0; $i < 3; $i++) {
    //valor x quantidadde (por produto)
    $faturamento = $produtos1[$i][0] * $produtos1[$i][1];
    /*echo "valor: ". $produtos1[$i][0]." , Quantidade: ".$produtos1[$i][1]. "<br>";*/
    //somar as quantidades (de todos os produtos)
    $soma = $produtos1[$i][1] + $soma;

}
echo "Faturamento: $faturamento <br>";
echo  "Quantidade: $soma";

//nome da matriz [linha][coluna]
/*echo "valor: ". $produtos1[0][0]." ; Quantidade: ".$produtos1[0][1]. "<br>";
echo $produtos1[1][0];*/

?>