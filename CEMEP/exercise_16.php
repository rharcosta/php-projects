<html xmlns="http://www.w3.org/1999/xhtml">
<!-- 4.	Um banco conceder� um cr�dito especial aos seus clientes, vari�vel com o saldo m�dio no �ltimo ano.
Fa�a um programa que leia o saldo m�dio de um cliente e calcule o valor do cr�dito de acordo com a tabela abaixo.
Mostre uma mensagem informando o saldo m�dio e o valor do cr�dito.

Saldo m�dio Percentual
de 0 a 200 nenhum cr�dito
de 201 a 400 20% do valor do saldo m�dio
de 401 a 600 30% do valor do saldo m�dio
acima de 601 40% do valor do saldo m�dio -->

<head>
  <title>Ex4</title>
</head>
<Form action="Script4.PHP"  method="post">
<body>
<center><table border="2">

<tr>
<td colspan=3>Cr�dito Especial<br />
Nome:&nbsp;&nbsp;&nbsp;
<input type="text" name="Nome" />
Saldo M�dio:&nbsp;&nbsp;&nbsp;
<input type="text" name="Saldo" /> <br /><br />
<center><input type="submit" name="Btncalcular" value="Calcular" /> </center>
</td>
</tr>

<tr>
<td><center>Saldo m�dio<br />
de 0 a 200<br />
de 201 a 400<br />
de 401 a 600<br />
acima de 601</center>
</td>
<td><center>Percentual<br />
nenhum cr�dito<br />
20% do valor do saldo m�dio<br />
30% do valor do saldo m�dio<br />
40% do valor do saldo m�dio</center>
</td>
</tr>

</table></center>
</body>
</Form>
</html>
