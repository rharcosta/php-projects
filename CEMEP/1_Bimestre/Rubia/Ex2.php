<html>

<head>
  <title>Exercício 2</title>
</head>

<body>
<center><table border="5" align="center" >
<tr>
 <th colspan=3  bgcolor="#FF6666"> <big>Exercicio 2</big> </th>
</tr>
<tr><td colspan="3"> <?php
date_default_timezone_set('America/Sao_Paulo');
print "<h3 align='center'>";
$Mes= date ("m");
$Ano = date("Y");
$Dia = date("d");
$semana = date("w");

          if ($semana == 0)
             $semana= "Domingo";
          elseif ($semana == 1)
             $semana = "Segunda Feira";
          elseif ($semana == 2)
             $semana = "Terça Feira";
          elseif ($semana == 3)
             $semana = "Quarta Feira";
          elseif ($semana == 4)
             $semana = "Quinta Feira";
          elseif ($semana == 5)
             $semana = "Sexta Feira";
          else
             $semana = "Sabado";
print $semana." - ".$Dia."/".$Mes."/".$Ano;
?>
</td></tr>
<tr><td bgcolor="#CCFFFF"><center>Prato</center></td><td bgcolor="#CCFFFF"><center>Sobremesa</center></td><td bgcolor="#CCFFFF"><center>Bebidas</center></td> </tr>
   <td width="300">
   <center>1- Vegetariano <br>
   2- Peixe <br>
   3- Frango <br>
   4- Carne <br></center>
  </td>

  <td width="300">
  <center>1- Abacaxi <br>
  2- Sorvete diet <br>
  3- Mousse diet <br>
  4- Mousse chocolate <br></center>

   <td width="300">
  <center>1- Chá <br>
  2- Suco de laranja <br>
  3- Suco de melão <br>
  4- Refrigerante <br></center>

</td> </tr>

<tr> <td colspan="3">
<?php

  $Prato =1;
  $Sobremesa = 1;
  $Bebida = 4;
  $Calorias = 0;


          if ($Prato == 1)
          $Calorias= $Calorias+180;
          if ($Prato == 2)
          $Calorias= $Calorias+230;
          if ($Prato == 3)
          $Calorias= $Calorias+250;
          if ($Prato == 4)
          $Calorias= $Calorias+350;
          if ($Sobremesa == 1)
          $Calorias= $Calorias+75;
          if ($Sobremesa == 2)
          $Calorias= $Calorias+110;
          if ($Sobremesa == 3)
          $Calorias= $Calorias+170;
          if ($Sobremesa == 4)
          $Calorias= $Calorias+200;
          if ($Bebida == 1)
          $Calorias= $Calorias+20;
          if ($Bebida == 2)
          $Calorias= $Calorias+70;
          if ($Bebida == 3)
          $Calorias= $Calorias+100;
          if ($Bebida == 4)
          $Calorias= $Calorias+65;


  print "Cliente: Rubia"; print "</br></br>";
  print "Prato: ".$Prato; print "</br></br>";
  print "Sobremesa: ".$Sobremesa; print "</br></br>";
  print "Bebida: ".$Bebida;  print "</br></br>";
  print "Total de calorias: ".$Calorias; print "</br></br>";
?>
  </td>
</tr>
</body>

</html>
