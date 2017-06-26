<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pagina de Loguin</title>
<link rel="stylesheet" type="text/css" href="Utilitarios/Maqueta.css" />
</head>

<body >
<div>
 <center>
 <form action="GUILogin.php" method='post'>
  <BR /><BR /><BR /><BR /><BR /><BR /><BR /><BR />
  <table class='gridtable' type='text/css' href='Utilitarios/Maqueta.css'>
     <tr><th bgcolor=#6699FF>SISTEMA</th><th bgcolor=#6699FF>Farmacia</th></tr>
     <tr><th bgcolor=#6699FF>usuario</th><td><input type=text name=usuario></td></tr>
	   <tr><th bgcolor=#6699FF>clave</th>  <td><input type=password name=clave></td></tr>
     <tr><th bgcolor=#6699FF>INGRESO A PAGINA</th><td><input type=submit name="OK"  value="Entrar"></td></tr>
	 <tr><th bgcolor=#6699FF>ABANDONAR PAGINA</th><td><input type=submit name="OK1" value="Salir"></td></tr>
</table></form></center>	 
</div>
</body>
</html>
<?php

if(isset($_POST["OK"]) && $_POST["OK"]=="Entrar")
{ $usuario="";
  $clave="";
  if(isset($_POST["usuario"]) & $_POST["usuario"]!="" )
   { $usuario=$_POST["usuario"];}
  if(isset($_POST["clave"]) & $_POST["clave"]!="" )
   { $clave=$_POST["clave"];}
  if($usuario!="" && $clave!="")
    include("Sesion/TLogin.php"); 
}
  
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Salir") 
{exit();}
   
?>
