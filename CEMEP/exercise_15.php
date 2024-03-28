<html xmlns="http://www.w3.org/1999/xhtml">
 <!-- 3. O cardápio de uma lanchonete é o seguinte:

Especificação Preço unitário

100 Cachorro quente 10,00
101 Bauru simples 12,00
102 Bauru c/ovo 14,00
103 Hamburger 15,00
104 Cheeseburger 17,00
105 Refrigerante 5,00

Faça um programa que leia o código do item pedido, a quantidade e calcule o valor a ser pago por aquele lanche.
Considere que a cada execução somente será calculado um item. -->

<head>
  <title>Ex3</title>
</head>
<Form action="Script3.PHP" method="Post">
<body>

<table align="center" border="2" bordercolor="#66FF99" >
  <tr>
    <td>Código</td>
    <td>Tipo</td>
    <td>Valor</td>
  </tr>
  <tr>
    <td>100</td>
    <td>Cachorro Quente</td>
    <td>R$10,00</td>
  </tr>
  <tr>
    <td>101</td>
    <td>Bauru Simples</td>
    <td>R$12,00</td>
  </tr>
  <tr>
    <td>102</td>
    <td>Bauru c/ovo</td>
    <td>R$14,00</td>
  </tr>
  <tr>
    <td>103</td>
    <td>Hamburger</td>
    <td>R$15,00</td>
  </tr>
  <tr>
    <td>104</td>
    <td>Cheeseburger</td>
    <td>R$17,00</td>
  </tr>
  <tr>
    <td>105</td>
    <td>Refrigerante</td>
    <td>R$5,00</td>
  </tr>
 <br /><br />

<td colspan=3 ><br /><br />
Código do Produto:&nbsp;&nbsp;&nbsp;
<input type="Text" name="Codigo"  size="30"/> <br />
Quantidade:&nbsp;&nbsp;&nbsp;
<input type="Text" name="Quantidade" size="30"/>  <br /><br />

<center><Input Type="Submit" Name="Btnenviar" Value="Calcular"/></center>
</td>
</table>
</body>
</Form>
</html>
