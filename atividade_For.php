<?php
/*verificar a data de validade de 10 produtos
utilizar a estrutura de repetição (FOR)
estrutura condicional (ano, mês e dia)
informar se os produtos estão ou não no prazo de validade.*/
$dia_atual = date ("d");
$mes_atual = date ("m");
$ano_atual = date ("Y");
for ($cont=1;$cont<=10; $cont++){
  $ano = rand (2020, 2030);
  $mes = rand(1,12);
  $dia = rand (1,25);  

  if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12){
  $dia = rand (1,31);

}else if ($mes == 2){
  $dia = rand (1,28);
  }
  else {
    $dia = rand (1,30);
  }
if ($ano > 2023){
    echo "Produto Válido. <br> Vencimento: $dia / $mes / $ano ";
}
else if ($ano == 2023){
    if ($mes >11){
       echo "Produto válido. <br> Vencimento: $dia / $mes / $ano";
    }
     else if ($mes == 11){
        if ($dia >= 16){
            echo "Produto válido.  <br> Vencimento: $dia / $mes / $ano";
        }
     }
}
else {
    echo "Produto Vencido. <br> Vencimento: $dia / $mes / $ano ";
}
}
?>