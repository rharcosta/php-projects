<html xmlns="http://www.w3.org/1999/xhtml">
<!-- 5. Fa�a um programa que receba o valor da venda,
escolha a condi��o de pagamento no menu e mostre o total da venda final conforme condi��es a seguir:

Venda a Vista - desconto de 10%
Venda a Prazo 30 dias - desconto de 5%
Venda a Prazo 60 dias - mesmo pre�o
Venda a Prazo 90 dias - acr�scimo de 5%
Venda com cart�o de d�bito - desconto de 8%
Venda com cart�o de cr�dito - desconto de 7% -->

<head>
  <title>Ex5</title>
</head>

 <Form action="Script5.PHP" method="post">
<body>
<center><table border="2">
  <tr>
    <td><center>C�digo</center></td>
    <td><center>Forma de pagamento</center></td>
    <td><center>Desconto</center></td>
  </tr>
  <tr>
    <td><center>100</center></td>
    <td><center>A Vista</center></td>
    <td><center>10%</center></td>
  </tr>
  <tr>
    <td><center>101</center></td>
    <td><center>A Prazo [30 dias]</center></td>
    <td><center>5%</center></td>
  </tr>
  <tr>
    <td><center>102</center></td>
    <td><center>A Prazo [60 dias]</center></td>
    <td><center>Mesmo Pre�o</center></td>
  </tr>
  <tr>
    <td><center>103</center></td>
    <td><center>A Prazo [90 dias]</center></td>
    <td><center>Acr�scimo de 5%</center></td>
  </tr>
  <tr>
    <td><center>104</center></td>
    <td><center>Cart�o de D�bito</center></td>
    <td><center>Desconto de 8%</center></td>
  </tr>
  <tr>
    <td><center>105</center></td>
    <td><center>Cart�o de Cr�dito</center></td>
    <td><center>Desconto de 7%</center></td>
  </tr>
  <tr>
  <td colspan="3"><br /><br />
  <center>Valor de venda:
  <input type="text" name="venda" maxlength="15" size="15" /></center>
  <center>C�digo do Pagamento:
  <input type="text" name="pag" maxlength="3" size="3" /></center>
  <center><br /><br />
  <input type="submit" name="Calcular" value="Calcular" /></center>
  </td>
  </tr>
</table></center>

</body>
</Form>
</html>
