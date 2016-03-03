<?php
$mysql_host = "us-cdbr-azure-central-a.cloudapp.net";
$mysql_database = "dbarranca";
$mysql_user = "b6a0edcc69e543";
$mysql_password = "1fac6bca";
#Inicio coneccion a base de datos
   if (!($link=mysql_connect($mysql_host, $mysql_user, $mysql_password))) 
   { 
      echo "Error conectando a la base de datos. gg :V"; 
      exit(); 
   } 
   if (!mysql_select_db($mysql_database,$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   #Cierre de conecciom a base de datos
   
?>
