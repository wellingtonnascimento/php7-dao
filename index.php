<?php

require_once("config.php");

/*Carregar um usuario
$root = new Usuario();
$root->loadByid(5);
echo $root;
*/

/*Carrega uma Lista de Usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*Carregar Uma Lista de usuarios buscando pelo login
$search = Usuario::search("we");
echo json_encode($search);
*/

//Carregar um usuario usando o login e a senha 
$usuario = new Usuario();
$usuario->login("wellington","1356");

echo $usuario;



?>