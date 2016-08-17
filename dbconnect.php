<?php
try{
  $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
  $db=new PDO('mysql:host=localhost; dbname=formucontact','root','root');
  $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);//Metre les noms des champs en majuscule
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Lancer des exeptions en cas d'erreurs

}
catch(PDO_Exception $e){
  die('erreurs:'.$e->getMessage());

}

 ?>
