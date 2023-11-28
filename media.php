<?php
$nm1 = $_POST["n1"];
$nm2 =$_POST["n2"];
$op = ($nm1 + $nm2)/2;
echo "Média: $op"; //a '' não é entendida como uma variável.
//imc= peso/altura*altura
/*$peso = 75;
$altura = 1.75;
//$imc = $peso/ $altura**2;
$imc = $peso/ pow($altura,2); //pow é para fazer a potência.
echo "<br> $imc";*/
?>