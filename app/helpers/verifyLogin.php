<?php 
session_start();
$_SESSION["userLogged"] = 150;
$userLogged = new userLogged();
$userLogged->setUser($_SESSION["userLogged"] ?? '');

if($userLogged->getUser()){
  
} else {
  echo "<script>alert('Faça Login novamente');</script>";
  echo "teste sem login";
}

?>