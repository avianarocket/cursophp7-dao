<?php

require_once("config.php");

// carrega usuario por id
// $root = new Usuario();
// $root->loadbyId(3);
// echo $root;

// carrega lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//busca usuario por parte do login
// $search = Usuario::search("and");
// echo json_encode($search);

//carrega usuario por login e senha
$usuario = new Usuario();
$usuario->login("anderson", "caneta@123");
echo $usuario;

?>