<?php

  session_start();

	$id=$_POST["id"];
  $skill=$_POST["eps"];
  $pdv=$_POST["pdv"];
  $admin=$_POST["admin"];
  $nome=$_POST["nome"];
  $eps=$_POST["eps"];
  

  $_SESSION['id'] = $id;
  $_SESSION['skill'] = $skill;
	$_SESSION['login'] = true;
	$_SESSION['pdv'] = $pdv;
  $_SESSION['nome'] = $nome;
  $_SESSION['eps'] = $eps;

  if ($admin == 1){
    $_SESSION['admin'] = true;
  }
  else {
    $_SESSION['admin'] = false;
  }
?>
