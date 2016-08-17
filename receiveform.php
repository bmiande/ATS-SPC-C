<?php
session_start();
require 'dbconnect.php';
//Reception des données du formulaire
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['message'];
echo"Votre Nom est:".$nom."<br>Votre email est:".$email."<br>Votre message:".$message;
$insert=$db->prepare("INSERT INTO contacts(nom,email,message) VALUES(?,?,?)");
$insert->execute($arry = array($nom,$email,$message));
header('Location:index.php');


 ?>
