<?php
require_once("../Negocio/Farmaco.php");

if(isset($_POST["id_farmaco"]) & $_POST["id_farmaco"]!="" )
{ $id_farmaco=$_POST["id_farmaco"];}
if(isset($_POST["descripcion"]) & $_POST["descripcion"]!="" )
{ $descripcion=$_POST["descripcion"];}
if(isset($_POST["precio"]) & $_POST["precio"]!="" )
{ $precio=$_POST["precio"];}
if(isset($_POST["unidad"]) & $_POST["unidad"]!="" )
{ $unidad=$_POST["unidad"];}
if(isset($_POST["id_tipoFarmaco"]) & $_POST["id_tipoFarmaco"]!="" )
{ $id_tipoFarmaco=$_POST["id_tipoFarmaco"];}

if(isset($_POST["OK"]) & $_POST["OK"]=="Ingresar")
{ $objFarmaco=new Farmacos();
  $objFarmaco->Farmacos($id_farmaco,$descripcion,$precio,$unidad,$id_tipoFarmaco);
  $resul=$objFarmaco->ingresarFarmaco();
  if ($resul!="") header("Location:../Vista/GUIFarmaco.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIFarmaco.php'</script>";         
}
if(isset($_POST["OK1"]) & $_POST["OK1"]=="Modificar")
{ $objFarmaco=new Farmacos();
  $objFarmaco->Farmacos($id_farmaco,$descripcion,$precio,$unidad,$id_tipoFarmaco);
  $resul=$objFarmaco->modificarFarmaco();
  if ($resul!="") header("Location:../Vista/GUIFarmaco.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO MODIFICADOS');
                window.location='../Vista/GUIFarmaco.php'</script>";     
}
if(isset($_POST["OK2"]) & $_POST["OK2"]=="Eliminar")
{ $objFarmaco=new Farmacos();
  $objFarmaco->setId_farmaco($id_farmaco);
  $resul=$objFarmaco->eliminarFarmaco();
  if ($resul!="") header("Location:../Vista/GUIFarmaco.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ELIMINADOS');
                window.location='../Vista/GUIFarmaco.php'</script>";      
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($id_farmaco);}
	
function buscarVector($id_farmaco)
{ $objFarmaco=new Farmacos();
  $objFarmaco->Farmacos($id_farmaco);//Datos a memoria
  $resul=$objFarmaco->buscarFarmaco();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...FARMACO PERDIDO EN LIMBUS');
					   window.location='../Vista/GUIFarmaco.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objFarmaco=new Farmaco();
  $matrix=$objFarmaco->listarFarmaco();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...FARMACO PERDIDO EN LIMBUS');
					  window.location='../Vista/GUIFarmaco.php'</script>";}
}
?>
