<?php
/*
$nota1= 7;
$nota2=9;
$media= ($nota1 + $nota2)/2;
$status = $media >=7 ? " Aprovado": " Reprovado";
echo "Média: $media , o aluno está  $status";*/

//criar uma calculadora com os 4 operadores.
//1. soma; 2. subtração; 3. multiplicação; 4. divisão.

$n1 = 5;
$n2 = 6;
$op = 1;


switch($op){
    case 1:
        $resultado = $n1 + $n2;
        break;
     case 2:
            $resultado = $n1 - $n2;
            break;
     case 3:
                $resultado = $n1 * $n2;
                break;
     case 4:
                 $resultado = $n1 / $n2;
                 break;
        default:
        echo "Opção inválida";
        $resultado = 0;
        break;
}

echo "Resultado: $resultado";
?>