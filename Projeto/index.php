<?php

$url = $_SERVER[ "REQUEST_URI"];

include "telas/head.php";
include "telas/menu.php";
include "acoes.php";

match($url) {
 "/" => home(),
 "/login" => login(),
 "/cadastro" => cadastro(),
 "/listar" => listar(),
 "/relatorio" => relatorio(),
 default => error404(),

};

include "telas/footer.php";