<?php


$_POST["Nome"];
$_POST["Dias"];

$Total=0;
$Diaria=60;


if($_POST["Dias"] > 15){
 $Total = ($Diaria + 5.50) * $_POST["Dias"];
}

elseif($_POST["Dias"] = 15){
 $Total = ($Diaria + 6) * $_POST["Dias"];
}

elseif($_POST["Dias"] < 15){
 $Total = ($Diaria + 8) * $_POST["Dias"];
}


print("Nome: ".$_POST["Nome"]);
print("<br/>");
print("Total da conta: R$".$Total);
print("<br/>");

?>


