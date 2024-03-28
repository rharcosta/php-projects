<?php
$_POST["Valor1"];
$_POST["Valor2"];
$_POST["Valor3"];

$Comissao1;
$Comissao2;
$Comissao3;

$Total = $_POST["Valor1"]+ $_POST["Valor2"]+ $_POST["Valor3"];

if (($_POST["Valor1"]>=30000)and($_POST["Valor1"]<=50000))
$Comissao1 = $_POST["Valor1"]*0.095;

if ($_POST["Valor1"]>50000)
$Comissao1 = $_POST["Valor1"]*0.12;

elseif ($_POST["Valor1"]< 30000)
$Comissao1 = $_POST["Valor1"]* 0.07;

if (($_POST["Valor2"]>=30000)and($_POST["Valor2"]<=50000))
$Comissao2 = $_POST["Valor2"]*0.095;

if ($_POST["Valor2"]>50000)
$Comissao2 = $_POST["Valor2"]*0.12;

elseif ($_POST["Valor2"]< 30000)
$Comissao2 = $_POST["Valor2"]* 0.07;


if (($_POST["Valor3"]>=30000)and($_POST["Valor3"]<=50000))
$Comissao3 = $_POST["Valor3"]*0.095;

if ($_POST["Valor3"]>50000)
$Comissao3 = $_POST["Valor3"]*0.12;

elseif ($_POST["Valor3"]< 30000)
$Comissao3 = $_POST["Valor3"]* 0.07;

print "Corretor 1: ".$_POST["Corretor1"];
print "<br />";
print "Valor da venda: R$".$_POST["Valor1"];
print "<br />";
print "Comissão do Vendedor: R$ ".$Comissao1;
print "<br /><br />";
print "Corretor 2: ".$_POST["Corretor2"];
print "<br />";
print "Valor da venda: R$".$_POST["Valor2"];
print "<br />";
print "Comissão do Vendedor: R$ ".$Comissao2;
print "<br /><br />";
print "Corretor 3: ".$_POST["Corretor3"];
print "<br />";
print "Valor da venda: R$".$_POST["Valor3"];
print "<br />";
print "Comissão do Vendedor: R$ ".$Comissao3;
print "<br /><br />";
print "Valor Total das Vendas: R$".$Total;
?>



