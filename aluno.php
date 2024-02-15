<?php
/*include ("notas.php");
$a = new Aluno();
$a->nota1 = 7;
echo ($a->nota1);

$a->nota2 = 6;
$a->nota3 = 9;
$media = ($a ->nota1 + $a ->nota2 + $a->nota3)/3;
echo ("<br> A nota final é:$media");

$a2 = new Aluno();
$a2->nota1 = 7;
echo ($a2->nota1);

$a2->nota2 = 6;
$a2->nota3 = 4;
$media2 = ($a2->nota1 + $a2->nota2 + $a2->nota3)/3;
echo ("<br><br> A nota final é:$media2");

$a3 = new Aluno();
$a3->nota1 = 10;
echo ($a3->nota1);

$a3->nota2 = 8;
$a3->nota3 = 10;
$media3 = ($a3->nota1 + $a3->nota2 + $a3->nota3)/3;
echo ("<br><br> A nota final é:$media3");

$mediaTurma = ($media + $media2 + $media3)/3;
echo ("<br><br> A media da turma é: $mediaTurma");*/

include ("notas.php");
$a = new Aluno(8, 7, 9.5);
$media = ($a->nota1 + $a->nota2 + $a->nota3)/3;
echo ($media);
?>
