<?php
require_once("../Negocio/Usuario.php");

if(isset($_POST["id_usuario"]) & $_POST["id_usuario"]!="")
{ $id_usuario=$_POST["id_usuario"];}
if(isset($_POST["login_usuario"]) & $_POST["login_usuario"]!="" )
{ $login_usuario=$_POST["login_usuario"];}
if(isset($_POST["pass_usuario"]) & $_POST["pass_usuario"]!="" )
{ $pass_usuario=$_POST["pass_usuario"];}
if(isset($_POST["nombre_usuario"]) & $_POST["nombre_usuario"]!="" )
{ $nombre_usuario=$_POST["nombre_usuario"];}
if(isset($_POST["apellido_usuario"]) & $_POST["apellido_usuario"]!="" )
{ $apellido_usuario=$_POST["apellido_usuario"];}
if(isset($_POST["correo_usuario"]) & $_POST["correo_usuario"]!="" )
{ $correo_usuario=$_POST["correo_usuario"];}
if(isset($_POST["fecha_nacimiento_usuario"]) & $_POST["fecha_nacimiento_usuario"]!="" )
{ $fecha_nacimiento_usuario=$_POST["fecha_nacimiento_usuario"];}
if(isset($_POST["id_perfil"]) & $_POST["id_perfil"]!="" )
{ $id_perfil=$_POST["id_perfil"];}


if(isset($_POST["OK"]) & $_POST["OK"]=="Ingresar")
{ $objUsuario=new Usuarios();
$objUsuario->Usuarios($id_usuario,$login_usuario,$pass_usuario,$nombre_usuario,$apellido_usuario,$correo_usuario,$fecha_nacimiento_usuario,$id_perfil);
  $resul=$objUsuario->ingresarUsuario();
  if ($resul!="") header("Location:../Vista/GUIUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIUsuario.php'</script>";         
}

if(isset($_POST["OK1"]) & $_POST["OK1"]=="Modificar")
{ $objUsuario=new Usuarios();
$objUsuario->Usuarios($id_usuario,$login_usuario,$pass_usuario,$nombre_usuario,$apellido_usuario,$correo_usuario,$fecha_nacimiento_usuario,$id_perfil);
  $resul=$objUsuario->modificarUsuario();
  if ($resul!="") header("Location:../Vista/GUIUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO MODIFICADOS');
                window.location='../Vista/GUIUsuario.php'</script>";         
}
if(isset($_POST["OK2"]) & $_POST["OK2"]=="Eliminar")
{ $objUsuario=new Usuarios();
  $objUsuario->setId_usuario($id_usuario);
  $resul=$objUsuario->eliminarUsuario();
  if ($resul!="") header("Location:../Vista/GUIUsuario.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO MODIFICADOS');
                window.location='../Vista/GUIUsuario.php'</script>";      
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($id_usuario,$id_perfil);}
	
function buscarVector($id_usuario,$id_perfil)
{ $objv=new Usuarios();
  $objUsuario->Usuarios($id_usuario,$id_perfil);//Datos a memoria
  $resul=$objUsuario->buscarUsuario();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...USUARIO PERDIDO EN LIMBUS');
					   window.location='../Vista/GUIUsuario.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objUsuario=new Usuario();
  $matrix=$objUsuario->listarUsuario();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...USUARIO PERDIDO EN LIMBUS');
					  window.location='../Vista/GUIUsuario.php'</script>";}
}

?>