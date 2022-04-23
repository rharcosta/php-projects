<?php
$_POST["Codigo"];
$_POST["Quantidade"];
$Total; 

if ($_POST["Codigo"] == 100){
$Total = $_POST["Quantidade"]*10;}

if ($_POST["Codigo"] == 101){
$Total = $_POST["Quantidade"]*12;}

if ($_POST["Codigo"] == 102){
$Total = $_POST["Quantidade"]*14;}

if ($_POST["Codigo"] == 103){
$Total = $_POST["Quantidade"]*15;}

if ($_POST["Codigo"] == 104){
$Total = $_POST["Quantidade"]*17;}

if ($_POST["Codigo"] == 105){
$Total = $_POST["Quantidade"]*5;}

print("Valor total: R$".$Total);

?>