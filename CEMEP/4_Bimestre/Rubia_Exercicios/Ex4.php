<html xmlns="http://www.w3.org/1999/xhtml">
<!-- 4.	Um banco concederá um crédito especial aos seus clientes, variável com o saldo médio no último ano.
Faça um programa que leia o saldo médio de um cliente e calcule o valor do crédito de acordo com a tabela abaixo.
Mostre uma mensagem informando o saldo médio e o valor do crédito.

Saldo médio Percentual
de 0 a 200 nenhum crédito
de 201 a 400 20% do valor do saldo médio
de 401 a 600 30% do valor do saldo médio
acima de 601 40% do valor do saldo médio -->

<head>
  <title>Ex4</title>
</head>
<Form action="Script4.PHP"  method="post">
<body>
<center><table border="2">

<tr>
<td colspan=3>Crédito Especial<br />
Nome:&nbsp;&nbsp;&nbsp;
<input type="text" name="Nome" />
Saldo Médio:&nbsp;&nbsp;&nbsp;
<input type="text" name="Saldo" /> <br /><br />
<center><input type="submit" name="Btncalcular" value="Calcular" /> </center>
</td>
</tr>

<tr>
<td><center>Saldo médio<br />
de 0 a 200<br />
de 201 a 400<br />
de 401 a 600<br />
acima de 601</center>
</td>
<td><center>Percentual<br />
nenhum crédito<br />
20% do valor do saldo médio<br />
30% do valor do saldo médio<br />
40% do valor do saldo médio</center>
</td>
</tr>

</table></center>
</body>
</Form>
</html>
