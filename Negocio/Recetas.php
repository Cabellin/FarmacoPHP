<?php
require_once("../Datos/Conexion.php");
class Receta
{  private $id_receta;
   private $fecha_emision;
   private $total_receta;
   private $estado;
   private $id_usuario;
 
   public function __construct(){}
   
   public function Receta($id_receta,$fecha_emision,$total_receta,$estado,$id_usuario)
   { $this->id_receta=$id_receta;
     $this->fecha_emision=$fecha_emision;
	 $this->total_receta=$total_receta;
	 $this->estado=$estado;
	 $this->id_usuario=$id_usuario;
   }
   //ACCESADORES
   public function getId_receta()			{return $this->id_receta;}
   public function getFecha_emision()		{return $this->fecha_emision;}
   public function getTotal_receta()        {return $this->total_receta;}
   public function getEstado()				{return $this->estado;}
   public function getId_usuario()			{return $this->id_usuario;}

   //MUTANTES
   public function setId_receta($id_receta)			{$this->id_receta=$id_receta;}
   public function setFecha_emision($fecha_emision)	{$this->fecha_emision=$fecha_emision;}
   public function setTotal_receta($total_receta)	{$this->total_receta=$total_receta;}
   public function setEstado($estado)				{$this->estado=$estado;}
   public function setId_usuario($id_usuario)		{$this->id_usuario=$id_usuario;}

   //NEGOCIO
public function ingresarReceta()
   { $objConex=new Conexion();
     $sql="INSERT INTO RECETA VALUES(".$this->id_receta.",'".$this->fecha_emision."',".$this->total_receta.",'".$this->estado."',".$this->id_usuario.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarReceta()
   { $objConex=new Conexion();
     $sql="UPDATE RECETA SET FECHA_EMISION='".$this->fecha_emision."',TOTAL_RECETA=".$this->total_receta.", ESTADO='".$this->estado."' WHERE(ID_RECETA=".$this->id_receta." && ID_USUARIO=".id_usuario.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarReceta()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM RECETA WHERE(ID_RECETA=".$id_receta.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }  
   
public function buscarReceta()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM RECETA WHERE(ID_RECETA=".$id_receta." && ID_USUARIO=".$id_usuario.")";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarReceta()
   { $objConex=new Conexion();
     $sql="SELECT * FROM RECETA";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   }   
  } //clase
?>
