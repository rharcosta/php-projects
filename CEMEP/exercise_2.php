<!-- Fa�a um pgm que calcule a quantidade de litros de combust�vel gastos em uma viagem, utilizando um autom�vel que faz 12 km por litro.
Para obter o c�lculo, fornecer o tempo gasto na viagem e a velocidade m�dia durante ela.
Obter:
-A dist�ncia percorrida
Apresentar:
-A velocidade m�dia
-Tempo gasto na viagem
-Dist�ncia percorrida
-Quantidade de litros utilizados -->

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Combustivel</title>
</head>
<!-- 12 KM-------------------1 Litro
     x KM--------------------X Litros -->
     <!-- DP= Tempo vezes velocidade m�dia -->
<body bgcolor="#C1FFFF">
<font size="6">
<?php
$T=10;
$VM= 20;
$DP=$T*$VM;
$QL= ($DP*1)/12;

echo("O carro percorreu uma dist�ncia de ".$DP);echo(" KM");echo("<br>");
echo("� uma velocidade media de ".$VM);echo(" KM");echo("<br>");
echo("� um tempo de ".$T); echo(" Minutos.");echo("<br>");
echo("Por fim a quantidade de litros utilizados foi de ".$QL);echo(" Litros");echo("<br>");

?>
</font>
</body>

</html>
