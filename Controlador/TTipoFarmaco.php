<?php
require_once("../Negocio/TipoFarmaco.php");
if(isset($_POST["id_tipo"]) && $_POST["id_tipo"]!="")
{$id_tipo=$_POST["id_tipo"];}
if(isset($_POST["descripcion_tipo"]) && $_POST["descripcion_tipo"]!="")
{$descripcion_tipo=$_POST["descripcion_tipo"];}

///////////////////

if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objTipoF=new TipoFarmaco();
  $objTipoF->TipoFarmaco($id_tipo,$descripcion_tipo);
  $resul=$objTipoF->ingresarTipoFarmaco();
  if($resul!="") header("Location:../Vista/GUITipoFarmaco.php");
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...DATOS PERDIDOS EN LIMBUS');
					  window.location='../Vista/GUITipoFarmaco.php'</script>";}
}
///////////////////
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objTipoF=new TipoFarmaco();
  $objTipoF->TipoFarmaco($id_tipo,$descripcion_tipo);
  $resul=$objTipoF->modificarTipoFarmaco();
  if($resul!="") header("Location:../Vista/GUITipoFarmaco.php");
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...ARRIENDO PERDIDO EN LIMBUS');
					  window.location='../Vista/GUITipoFarmaco.php'</script>";}
}
///////////////////
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objTipoF=new TipoFarmaco();
  $objTipoF->TipoFarmaco($id_tipo,$descripcion_tipo);
  $resul=$objTipoF->eliminarTipoFarmaco();
  if($resul!="") header("Location:../Vista/GUITipoFarmaco.php");
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...ARRIENDO PERDIDO EN LIMBUS');
					  window.location='../Vista/GUITipoFarmaco.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($id_tipo);}
	
function buscarVector($id_tipo)
{ $objTipoF=new TipoFarmaco();
  $objTipoF->TipoFarmaco($id_tipo);//Datos a memoria
  $resul=$objTipoF->buscarTipoFarmaco();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...TIPO DE FARMACO PERDIDO EN LIMBUS');
					   window.location='../Vista/GUITipoFarmaco.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objTipoF=new TipoFarmaco();
  $matrix=$objTipoF->listarTipoFarmaco();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...TIPO DE FARMACO PERDIDO EN LIMBUS');
					  window.location='../Vista/GUITipoFarmaco.php'</script>";}
}

?>


