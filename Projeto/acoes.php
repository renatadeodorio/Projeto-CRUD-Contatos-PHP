<?php

function login() {
 include "telas/login.php";
 
}
function cadastro() {
 if ($_POST) {
$nome = $_POST['nome'];
$email = $_POST['email'];
$telas = $_POST['telefone'];

$arquivo = fopen("dados/contatos.csv","a+");

fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
 

echo "Pronto! Cadastro realizado!";
 

 include "telas/cadastro.php";
 
}
}


function home() {
 include "telas/home.php";

}

function listar() {
$contatos = file("dados/contatos.csv");

 include "telas/listar.php";

}
function error404() {
 include "telas/404.php";

}
function relatorio() {
 include "telas/relatorio.php";
}