<?php 

$mail='TUCORREO@DOMINIO.COM'; 

  
$nombre = $_POST['nombre']; 
$email = $_POST['email']; 
$msg = $_POST['msg']; 

$thank="pp.html"; 

$message = " 
nombre:".$nombre." 
email:".$email." 
msg:".$msg.""; 
   
  if (mail($mail,"consulta",$message))  
       Header ("Location: $thank"); 
   
 ?>