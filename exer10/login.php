<?php
require_once "usuario.php";
require_once "usuario.php";

session_start();
$usuario1 = new Usuario();
$usuario1->nomeUsuario = "Geovanna";
$usuario1->autenticar();

setcookie("ultimoAcesso", date("Y-m-d H:i:s"), time() + 3600, "/");

