<html>
<head>
  <title>Exercício 1</title>
</head>

<body> <center><table border="5" align="center" >
<tr>
 <th colspan=2  bgcolor="#CC99FF"> <big>Exercicio 1- Desenvolvido por Rubia</big> </th>
</tr>
<tr><td colspan="2"> <?php
date_default_timezone_set('America/Sao_Paulo');
print "<h3 align='center'>";
$Mes= date ("m");
if($Mes==1)
$Mes=("Janeiro");
elseif($Mes==2)
$Mes=("Fevereiro");
elseif($Mes==3)
$Mes=("Março");
elseif($Mes==4)
$Mes=("Abril");
elseif($Mes==5)
$Mes=("Maio");
elseif($Mes==6)
$Mes=("Junho");
elseif($Mes==7)
$Mes=("Julho");
elseif($Mes==8)
$Mes=("Agosot");
elseif($Mes==9)
$Mes=("Setembro");
elseif($Mes==10)
$Mes=("Outubro");
elseif($Mes==11)
$Mes=("Novembro");
elseif($Mes==12)
$Mes=("Dezembro");

$Ano = date("Y");
$Dia = date("d");
print "Paulínia, ".$Dia." de ".$Mes." de ".$Ano. "-" ;
print date ("h:i");
?>
</td></tr>
<tr><td bgcolor="#CCFFFF"><center>IMC</center></td><td bgcolor="#CCFFFF"><center>Faixa de risco</center></td> </tr>
   <td width="300">
   <center>Abaixo de 20 <br>
   A partir de 20 até 25 <br>
   Acima de 25 até 30 <br>
   Acima de 30 até 35 <br>
   Acima de 35 <br></center>
  </td>

  <td width="300">
  <center>Abaixo do peso <br>
  Normal <br>
  Excesso de peso <br>
  Obesidade  <br>
  Obesidade mórbida <br></center>

</td> </tr>
<tr> <td colspan="2">
<?php
  $Altura=1.75;
  $Peso=81;
  $Resultado = $Peso/($Altura*$Altura);
  if ($Resultado<20)
  $Faixa=("Abaixo do peso");
  elseif (($Resultado>=20)and ($Resultado<25))
  $Faixa=("Normal");
  elseif (($Resultado>=25)and ($Resultado<30))
  $Faixa=("Excesso de peso");
  elseif (($Resultado>=30)and ($Resultado<35))
  $Faixa=("Obesidade");
  elseif ($Resultado>35)
  $Faixa=("Obesidade mórbida");

  print "Nome do paciente: Rubia"; print "</br></br>";
  print "Peso: ".$Peso; print "</br></br>";
  print "Altura: ".$Altura; print "</br></br>";
  print "IMC= ".$english_format_numer= number_format($Resultado,2, ',','');  print "</br></br>";
  print "Faixa de risco: ".$Faixa; print "</br></br>";
?>
  </td>
</tr>


</table>
</center>
</body>
</html>
