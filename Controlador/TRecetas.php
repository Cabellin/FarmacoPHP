<?php
require_once("../Negocio/Recetas.php");

if(isset($_POST["id_receta"]) && $_POST["id_receta"]!="" )
{ $id_receta=$_POST["id_receta"];}
if(isset($_POST["fecha_emision"]) && $_POST["fecha_emision"]!="" )
{ $fecha_emision=$_POST["fecha_emision"];}
if(isset($_POST["total_receta"]) && $_POST["total_receta"]!="" )
{ $total_receta=$_POST["total_receta"];}
if(isset($_POST["estado"]) && $_POST["estado"]!="" )
{ $estado=$_POST["estado"];}
if(isset($_POST["id_usuario"]) && $_POST["id_usuario"]!="" )
{ $id_usuario=$_POST["id_usuario"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ $objRec=new Receta();
  $objRec->Receta($id_receta,$fecha_emision,$total_receta,$estado,$id_usuario);
  $resul=$objRec->ingresarReceta();
  if ($resul!="") header("Location:../Vista/GUIReceta.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIReceta.php'</script>";         
}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ $objRec=new Receta();
  $objRec->Receta($id_receta,$fecha_emision,$total_receta,$estado,$id_usuario);
  $resul=$objRec->modificarReceta();
  if ($resul!="") header("Location:../Vista/GUIReceta.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIReceta.php'</script>";            
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ $objRec=new Receta();
  $objRec->setId_receta($id_receta);
  $resul=$objRec->eliminarReceta();
  if ($resul!="") header("Location:../Vista/GUIReceta.php");
  else   echo "<script language='javascript'>alert('ERROR:DATOS PERDIDOS, NO ALMACENADOS');
                window.location='../Vista/GUIReceta.php'</script>";          
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
	{buscarVector($id_receta,$id_usuario);}
	
function buscarVector($id_receta,$id_usuario)
{ $objRec=new Receta();
  $objRec->Receta($id_receta,$id_usuario);//Datos a memoria
  $resul=$objRec->buscarReceta();
  if($vector!="") return $vector;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...RECETAS PERDIDO EN LIMBUS');
					   window.location='../Vista/GUIReceta.php'</script>";}
}
///////////////////
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
	{buscarMatrix();}
	
function buscarMatrix()
{ $objRec=new Receta();
  $matrix=$objRec->listarReceta();
  if($matrix!="") return $matrix;
  else	{		 echo "<script language='javascript'>
                      alert('ERROR...RECETAS PERDIDO EN LIMBUS');
					  window.location='../Vista/GUIReceta.php'</script>";}
}
?>


