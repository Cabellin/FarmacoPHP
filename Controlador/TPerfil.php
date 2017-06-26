<?php
require_once("../Negocio/Perfil.php");
if(isset($_POST["id_perfil"]) && $_POST["id_perfil"]!="")
{$id_perfil=$_POST["id_perfil"];}
if(isset($_POST["descripcion_perfil"]) && $_POST["descripcion_perfil"]!="")
{$descripcion_perfil=$_POST["descripcion_perfil"];}

///////////////////

if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objPerfil=new Perfil();
  $objPerfil->Perfil($id_perfil,$descripcion_perfil);
  $resul=$objPerfil->ingresarPerfil();
  if($resul!="") header("Location:../Vista/GUIPerfil.php");
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...DATOS PERDIDOS EN LIMBUS');
					  window.location='../Vista/GUIPerfil.php'</script>";}
}
///////////////////
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objPerfil=new Perfil();
  $objPerfil->Perfil($id_perfil,$descripcion_perfil);
  $resul=$objPerfil->modificarPerfil();
  if($resul!="") header("Location:../Vista/GUIPerfil.php");
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...ARRIENDO PERDIDO EN LIMBUS');
					  window.location='../Vista/GUIPerfil.php'</script>";}
}
///////////////////
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objPerfil=new Perfil();
  $objPerfil->Perfil($id_perfil,$descripcion_perfil);
  $resul=$objPerfil->eliminarPerfil();
  if($resul!="") header("Location:../Vista/GUIPerfil.php");
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...ARRIENDO PERDIDO EN LIMBUS');
					  window.location='../Vista/GUIPerfil.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($id_perfil);}
	
function buscarVector($id_perfil)
{ $objPerfil=new Perfil();
  $objPerfil->TipoPerfil($id_perfil);//Datos a memoria
  $resul=$objPerfil->buscarPerfil();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...PERFIL PERDIDO EN LIMBUS');
					   window.location='../Vista/GUIPerfil.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objPerfil=new Perfil();
  $matrix=$objPerfil->listarPerfil();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...PERFIL PERDIDO EN LIMBUS');
					  window.location='../Vista/GUIPerfil.php'</script>";}
}

?>