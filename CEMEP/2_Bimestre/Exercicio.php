<html>

<head>
  <title>Tabela</title>
</head>

<body>
<table border="4" align="center">
    <tr>
      <th colspan=2 bgcolor="#FFCCCC"> EXERCICIO 1 </th>
   </tr>
<tr>
<td colspan=2>
        <?php  date_default_timezone_set('America/Sao_Paulo');

          print "<h3 align='center'>";
          $mes = date("m");

          if ($mes == 1)
             $mes = "Janeiro";
          elseif ($mes == 2)
             $mes = "Fevereiro";
          elseif ($mes == 3)
             $mes = "Março";
          elseif ($mes == 4)
             $mes = "Abril";
          elseif ($mes == 5)
             $mes = "Maio";
          elseif ($mes == 6)
             $mes = "Junho";
          elseif ($mes == 7)
            $mes = "Julho";
          elseif ($mes == 8)
             $mes = "Agosto";
          elseif ($mes == 9)
             $mes = "Setembro";
          elseif ($mes == 10)
             $mes = "Outubro";
          elseif ($mes == 11)
             $mes = "Novembro";
          elseif ($mes == 12)
            $mes = "Dezembro";

        $ano = date("Y");
        $dia_mes = date("d");
        print "Paulínia, ".$dia_mes." de ".$mes." de ".$ano;

        ?>
      </td>
  </tr>
  <tr>
 <td width="300">
Calculadora <br>
(1) Soma <br>
(2) Subtração <br>
(3) Divisão <br>
(4) Multiplicação <br>
</td>
 <td width="300">
 <?php    $valor1=3;
          $valor2=5;
          $op=1;
          if($op==1){
          $Resultado=$valor1+$valor2;
          print ("O valor da soma é:".$Resultado);
          }
          elseif($op==2){
          $Resultado=$valor1-$valor2;
          print ("O valor da subtração é:".$Resultado);
          }
          elseif($op==3){
          $Resultado=$valor1/$valor2;
          print ("O valor da divisão é:".$Resultado);
          }
          elseif($op==4){
          $Resultado=$valor1*$valor2;
          print ("O valor da multiplicação é:".$Resultado);
          }

 print("<td/>");
  print("<tr/>");
   print("<tr>");
    print("<td>");

 print("Operação escolhida:".$op)


 ?>  </td>
<td>Números escolhidos: 3 e 5</td></tr>
<tr>
<td colspan=2>
<center>Desenvolvido por Rubia</center>
</td>

</tr>



</table>

</body>

</html>
