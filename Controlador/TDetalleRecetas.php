<?php
require_once("../Negocio/DetalleRecetas.php");

if(isset($_POST["id_receta"]) && $_POST["id_receta"]!="" )
{ $id_receta=$_POST["id_receta"];}
if(isset($_POST["id_farmaco"]) && $_POST["id_farmaco"]!="" )
{ $id_farmaco=$_POST["id_farmaco"];}
if(isset($_POST["cantidad"]) && $_POST["cantidad"]!="" )
{ $cantidad=$_POST["cantidad"];}
if(isset($_POST["sub_total"]) && $_POST["sub_total"]!="" )
{ $sub_total=$_POST["sub_total"];}


if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objDetRe=new DetalleRecetas();
  $objDetRe->DetalleRecetas($id_receta,$id_farmaco,$cantidad,$sub_total);
  $resul=$objDetRe->ingresarDetalleRecetas();
  if ($resul!="") header("Location:../Vista/GUIDetalleRecetas.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIDetalleRecetas.php'</script>";         
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objDetRe=new DetalleRecetas();
  $objDetRe->DetalleRecetas($id_receta,$id_farmaco,$cantidad,$sub_total);
  $resul=$objDetRe->modificarDetalleRecetas();
  if ($resul!="") header("Location:../Vista/GUIDetalleRecetas.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIDetalleRecetas.php'</script>";            
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objDetRe=new DetalleRecetas();
  $objDetRe->setId_receta($id_receta);
  //$objDet->setCodigo($codigo);  
  $resul=$objDetRe->eliminarDetalle();
  if ($resul!="") header("Location:../Vista/GUIDetalleRecetas.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIDetalleRecetas.php'</script>";         
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($id_receta,$id_farmaco);}
	
function buscarVector($id_receta,$id_farmaco)
{ $objDetRe=new DetalleRecetas();
  $objDetRe->DetalleRecetas($id_receta,$id_farmaco);//Datos a memoria
  $resul=$objDetRe->buscarDetalleRecetas();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...DETALLE DE RECETA PERDIDO EN LIMBUS');
					   window.location='../Vista/GUIDetalleRecetas.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objDetRec=new DetalleRecetas();
  $matrix=$objDetRec->listarDetalleRecetas();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...DETALLE DE RECETA PERDIDO EN LIMBUS');
					  window.location='../Vista/GUIDetalleRecetas.php'</script>";}
}
?>
