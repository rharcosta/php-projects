<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Tabela</title>
</head>

<body>
 <?php
 date_default_timezone_set('America/Sao_Paulo');

 ?>
<table align="center" border="4" bordercolor="#993300">
  <tr>
    <td>
    <center><?php print "Primeiro exerc�cio";
    print "<br>";
    ?>
    <?php print date ("d/m/Y h:i");
    ?> </center> </td></tr>

  <tr>
    <td>
    <?php print "Calculadora:"; print "<br><br>";
    print "(1)Soma"; print"<br>";
    print "(2)Subtra��o"; print"<br>";
    print "(3)Divis�o"; print"<br>";
    print "(4)Multiplica��o"; print"<br><br>";
    ?>
    </td>

    <td>
    <?php
    $valor1=3;
    $valor2=5;
    $resultado=0;
    $resultado=$valor1*$valor2;
     print ("O resultado �:". $resultado);
    ?>
    </td>
    </tr>

 <tr>
    <td>
    <?php
    print "Escolha a opera��o: 4";
    print"<br>";
    ?>
    </td>
    <td>Desenvolvido por Rubia</td>
  </tr>

</table>

</body>

</html>
