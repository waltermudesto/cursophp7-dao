<?php

require_once("config.php");

//Carrega 1 usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma Lista de Usuarios.
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma List de usuaris buscando pelo login
//$search = Usuario::search("be");
//echo json_encode($search);

//Carrega um usuario usando login e senha
//$usuario = new Usuario();
//$usuario->login("beth", "paiteamosempre");
//echo $usuario;


//Carrega insert de um novo usuario
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
/*
//Fazendo update
$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("tecnet", "tecnet*2019");

echo $usuario;*/

/*
//Deletando um Usuario
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;*/

?>