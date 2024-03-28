<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Pgm2</title>
</head>

<!-- Pgm que obtém:
-O valor para a variável HT (Hora trabalhada no mês);
-O valor para a variável VH (Valor da hora trabalhada);
-O valor para a variável PD (Percentual de desconto);
-Calcular o salário bruto: SB=HT*VH;
-Calcular o total de desconto: TD=(PD/100)*SB;
-Calcular o salário líquido: SL=SB-TD;
Apresente os valores de: horas trabalhadas, salário bruto, desconto, salário líquido. -->

<body>

<?php
$HT=10;
$VH=10;
$PD=1;
$SB=$HT*$VH;
$TD=($PD/100)*$SB;
$SL=$SB-$TD;
echo"Salário Bruto:".$SB;echo("<br>" );
echo"Total de Desconto:".$TD;echo("<br>" );
echo"Salário Líquido:".$SL;echo("<br>" );


?>

</body>

</html>
