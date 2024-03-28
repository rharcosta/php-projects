<html xmlns="http://www.w3.org/1999/xhtml">
 <!-- Descontam-se inicalmente 10% do salário bruto do trabalhador como contribuição à previdência social.
 Após esse desconto, há um outro desconto de 5% sobre o valor restante do salário bruto, a título de um determinado imposto.
 Faça um algoritmo que leia o salário bruto de um cidadão e imprima o seu salário líquido.-->
<head>
  <title>Aula 28/03</title>
</head>

<body>

<!--
HT (Hora trabalhada no mês);
VH (Valor da hora trabalhada);
PD (Percentual de desconto);
Salário bruto: SB=HT*VH;
Total de desconto: TD=(PD/100)*SB;
Salário líquido: SL=SB-TD;
 -->

<?php
$HT=10;
$VH=10;
$PD=15;
$SB=($HT*$VH)*0.85;
$TD=($PD/100)*$SB;
$SL=$SB-$TD;
echo"Salário Bruto:".$SB;echo("<br>" );
echo"Salário Líquido:".$SL;echo("<br>" );


?>

</body>

</html>
