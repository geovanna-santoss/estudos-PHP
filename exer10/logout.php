<?php
require_once "usuario.php";
session_start();
$_SESSION["usuario"] = $usuario1;
session_destroy();
