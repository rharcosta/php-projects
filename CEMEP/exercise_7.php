<html xmlns="http://www.w3.org/1999/xhtml">
 <!-- Descontam-se inicalmente 10% do sal�rio bruto do trabalhador como contribui��o � previd�ncia social.
 Ap�s esse desconto, h� um outro desconto de 5% sobre o valor restante do sal�rio bruto, a t�tulo de um determinado imposto.
 Fa�a um algoritmo que leia o sal�rio bruto de um cidad�o e imprima o seu sal�rio l�quido.-->
<head>
  <title>Aula 28/03</title>
</head>

<body>

<!--
HT (Hora trabalhada no m�s);
VH (Valor da hora trabalhada);
PD (Percentual de desconto);
Sal�rio bruto: SB=HT*VH;
Total de desconto: TD=(PD/100)*SB;
Sal�rio l�quido: SL=SB-TD;
 -->

<?php
$HT=10;
$VH=10;
$PD=15;
$SB=($HT*$VH)*0.85;
$TD=($PD/100)*$SB;
$SL=$SB-$TD;
echo"Sal�rio Bruto:".$SB;echo("<br>" );
echo"Sal�rio L�quido:".$SL;echo("<br>" );


?>

</body>

</html>
