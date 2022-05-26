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
// $usuario = new Usuario();
// $usuario->login("anderson", "caneta@123");
// echo $usuario;

//INSERE USUARIO
// $usuario = new Usuario("Mirian", "lapis");
// $usuario->insert();
// echo $usuario;

//update editar usuario
//estanciando novo objeto usuario
// $usuario = new Usuario();
//carregando usuario e setando valor
// $usuario->loadById(4);
//Editando o usuario
// $usuario->update("Miririnha", "lovebranquinho");
//mostarndo alteração
// echo $usuario;

//deletar usuario
//estanciando novo objeto usuario
$usuario = new Usuario();
//carregando usuario e setando valor
$usuario->loadById(4);
//Editando o usuario
$usuario->delete();
//mostarndo alteração
echo $usuario;


?>