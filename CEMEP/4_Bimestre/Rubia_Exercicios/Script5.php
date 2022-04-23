<?php

$_POST["pag"];
$_POST["venda"];
$total = 0;

if ($_POST["pag"] == 100)
$total = $_POST["venda"] * 0.9;

elseif ($_POST["pag"] == 101)
$total = $_POST["venda"] * 0.95;

elseif ($_POST["pag"] == 102)
$total = $_POST["venda"];

elseif ($_POST["pag"] == 103)
$total = $_POST["venda"] * 1.05;

elseif ($_POST["pag"] == 104)
$total = $_POST["venda"] * 0.92;

elseif ($_POST["pag"] == 105)
$total = $_POST["venda"] * 0.93;

print "Código de pagamento escolhido: ".$_POST["pag"];
print "<br />";
print "Valor de venda inicial: ".$_POST["venda"];
print "<br />";
print "Valor de venda com ajuste: R$".$total;

?>