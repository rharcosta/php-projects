<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Pgm2</title>
</head>

<!-- Pgm que obt�m:
-O valor para a vari�vel HT (Hora trabalhada no m�s);
-O valor para a vari�vel VH (Valor da hora trabalhada);
-O valor para a vari�vel PD (Percentual de desconto);
-Calcular o sal�rio bruto: SB=HT*VH;
-Calcular o total de desconto: TD=(PD/100)*SB;
-Calcular o sal�rio l�quido: SL=SB-TD;
Apresente os valores de: horas trabalhadas, sal�rio bruto, desconto, sal�rio l�quido. -->

<body>

<?php
$HT=10;
$VH=10;
$PD=1;
$SB=$HT*$VH;
$TD=($PD/100)*$SB;
$SL=$SB-$TD;
echo"Sal�rio Bruto:".$SB;echo("<br>" );
echo"Total de Desconto:".$TD;echo("<br>" );
echo"Sal�rio L�quido:".$SL;echo("<br>" );


?>

</body>

</html>
