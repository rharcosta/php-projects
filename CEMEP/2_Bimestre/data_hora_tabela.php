<html>

<head><title> Aula 04/04</title></head>

<body>
<table border="1" align="center">
   <tr>
      <td>
        <?php
          date_default_timezone_set('America/Sao_Paulo');
          print "<h2 align='center'> Data e Hora do sistema </h2>";
        ?>
      </td>
   </tr>
   <tr>
      <td>
        <?php
          print "<h3 align='center'>";
            print date("d/m/Y h:i");
          print "</h3>";
        ?>
      </td>
  </tr>
  <td>
        <?php
          print "<h3 align='center'>";
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
        print $semana.", ".$dia_mes." de ".$mes." de ".$ano;

        ?>
      </td>
  </tr>
</table>
  <br><br>
  <h1 align="center"> Desenvolvido por Rubia</h1>

</body>

</html>