<?php
 $_POST["Saldo"];
 $_POST["Nome"] ;

 if (($_POST["Saldo"]>=0) and ($_POST["Saldo"]<=200)){
   print("Olá, " . $_POST["Nome"] . " Seu credito especial é de 0%");
   $Credito= 0;
   print("<br />"); }


 else if (($_POST["Saldo"]>=201) and ($_POST["Saldo"]<=400)){
  $Credito= 0.2*$_POST["Saldo"];
  print("Olá, " . $_POST["Nome"] . " Seu credito especial é de 20%");
  print("<br />");}

 else if (($_POST["Saldo"]>=401) and ($_POST["Saldo"]<=600)){
  $Credito= 0.3*$_POST["Saldo"];
   print("Olá, " . $_POST["Nome"] . " Seu credito especial é de 30%");
   print("<br />");}

 else if ($_POST["Saldo"]>=601){
  $Credito= 0.4*$_POST["Saldo"];
   print("Olá, " . $_POST["Nome"] ." Seu credito especial é de 40%");
   print("<br />");}


 print("Saldo médio: " . $_POST["Saldo"]);
 print("<br />");
 print("Valor do crédito: R$ " . $Credito);

?>

