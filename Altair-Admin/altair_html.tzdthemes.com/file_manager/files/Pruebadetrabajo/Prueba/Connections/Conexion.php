<?php

 try{
	 $base=new PDO("mysql:host:localhost;dbname=prueba","root","");
	 $base-> setAtTribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	 $base-> exec("SET CHARACTER SET UTF8");
	 
 }catch(Exception $e){
 //('Error '.$e->getMessage());
 echo "Error en la linea.....".$e->getLine();
 }
 
?>