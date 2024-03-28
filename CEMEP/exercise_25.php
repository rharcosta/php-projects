
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Programa 1</title>
</head>

<body>

<b><font face="@Arial Unicode MS" size="7"><center><?php
$SalarioM=930;
$Quilowatts=30;
$Valor=$SalarioM / 5;
$Resultado= $Valor*30;
$Desconto= $Resultado*0.85;
echo("O valor em reais de cada Quilowatt: R$".$Valor); echo(",00"); echo("<br>");
echo("O valor em reais a ser pago por essa residencia: R$" .$Resultado); echo(",00"); echo("<br>");
echo("Novo valor a ser pago com o desconto: R$".$Desconto );echo(",00");

?></center></font></b>

</body>

</html>
