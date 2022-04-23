<!-- Faça um pgm que calcule a quantidade de litros de combustível gastos em uma viagem, utilizando um automóvel que faz 12 km por litro.
Para obter o cálculo, fornecer o tempo gasto na viagem e a velocidade média durante ela.
Obter:
-A distância percorrida
Apresentar:
-A velocidade média
-Tempo gasto na viagem
-Distância percorrida
-Quantidade de litros utilizados -->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Combustivel</title>
</head>
<!-- 12 KM-------------------1 Litro
     x KM--------------------X Litros -->
     <!-- DP= Tempo vezes velocidade média -->
<body bgcolor="#C1FFFF">
<font size="6">
<?php
$T=10;
$VM= 20;
$DP=$T*$VM;
$QL= ($DP*1)/12;

echo("O carro percorreu uma distância de ".$DP);echo(" KM");echo("<br>");
echo("à uma velocidade media de ".$VM);echo(" KM");echo("<br>");
echo("à um tempo de ".$T); echo(" Minutos.");echo("<br>");
echo("Por fim a quantidade de litros utilizados foi de ".$QL);echo(" Litros");echo("<br>");

?>
</font>
</body>

</html>
