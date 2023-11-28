<?php
//faça um sistema que gerencia o estoque de uma empresa. Sabendo a quantidade estocada de um produto, verifique o tipo de movimentação (entrada ou saída) e realize o cálculo para atualizar o estoque.
//quantidade estocada:
//Tipo de movimentação:
//Quantidade movimentada:
//Estoque atualizado: ?
$Quantidade_Estocada = 100;
$Tipo_de_Movimentação = "Entrada";
$Quantidade_Movimentada = 30;
$Estoque_Atual = 0;
/*if ($Tipo_de_Movimentação == "Saída") {
    $Estoque_Atual = $Quantidade_Estocada - $Quantidade_Movimentada;
} else {
    $Estoque_Atual = $Quantidade_Estocada + $Quantidade_Movimentada;
}
echo "Estoque: $Quantidade_Estocada <br>
      Movimentação: $Tipo_de_Movimentação<br>
      Quantidade: $Quantidade_Movimentada<br>
      Estoque Atual: $Estoque_Atual";*/
      //teste lógico ? valor se verdadeiro : valor se falso (operador ternario)
      $Estoque_Atual = $Tipo_de_Movimentação == "saída" ? $Quantidade_Estocada - $Quantidade_Movimentada : $Quantidade_Estocada + $Quantidade_Movimentada;
      echo "Estoque: $Quantidade_Estocada <br>
      Movimentação: $Tipo_de_Movimentação<br>
      Quantidade: $Quantidade_Movimentada<br>
      Estoque Atual: $Estoque_Atual";
?>