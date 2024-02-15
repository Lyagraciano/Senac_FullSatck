<?php
/*include ("produto.php"); //criar um objeto da classe Produto.
$p = new Produto(); // atribui um valor ao atributo nome.
$p-> nome = "batata"; //escreve o atributo nome.

echo($p->nome);
$p-> quantidade = 20;
$p -> preco = 4.59;
echo ($p-> preco);

$p2 = new Produto();//Produto é o nome da classe.
$p2 -> nome = "Arroz";
$p2 ->quantidade = 60;
$p2 ->preco = 5.80;
$totalEstoque = $p-> quantidade + $p2 -> quantidade;
echo ("<br>Quantidade total em estoque: $totalEstoque");*/

// Opção com o Construct:

include ("produto.php"); 

$p = new Produto("batata", 20, 4.59); //aqui está utilizando o construct
$p2 = new Produto ("arroz", 60, 5.80);
$p2->getQuantidade(80);
//echo($p->preco);
$totalEstoque = $p->getQuantidade() + $p2-> getQuantidade();
echo ("<br>Quantidade total em estoque: $totalEstoque");
$faturamentoEstimado = $p2-> faturamentoMax();
echo ("<br> Faturamento Máximo: $faturamentoEstimado");
?>
