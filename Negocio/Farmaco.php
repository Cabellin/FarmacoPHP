<?php
require_once("../Datos/Conexion.php");
class Farmacos
{  private $id_farmaco;
   private $descripcion;
   private $precio;
   private $unidad;
   private $id_tipoFarmaco;
 
   public function __construct(){}
   
   public function Farmacos($id_farmaco,$descripcion,$precio,$unidad,$id_tipoFarmaco)
   { $this->id_farmaco=$id_farmaco;
     $this->descripcion=$descripcion;
	   $this->precio=$precio;
	   $this->unidad=$unidad;
	   $this->id_tipoFarmaco=$id_tipoFarmaco;
   }
   //ACCESADORES
   public function getId_farmaco()		   {return $this->id_farmaco;}
   public function getDescripcion() 	   {return $this->descripcion;}
   public function getPrecio()       	   {return $this->precio;}
   public function getUnidad()		       {return $this->unidad;}
   public function getId_tipoFarmaco()     {return $this->id_tipoFarmaco;}

   //MUTANTES
   public function setId_farmaco($id_farmaco)			{$this->id_farmaco=$id_farmaco;}
   public function setDescripcion($descripcion)			{$this->descripcion=$descripcion;}
   public function setPrecio($precio)					{$this->precio=$precio;}
   public function setUnidad($unidad)					{$this->unidad=$unidad;}
   public function setId_tipoFarmaco($id_tipoFarmaco)	{$this->id_tipoFarmaco=$id_tipoFarmaco;}

   //NEGOCIO
public function ingresarFarmaco()
   { $objConex=new Conexion();
     $sql="INSERT INTO farmacos VALUES(".$this->id_farmaco.",'".$this->descripcion."',".$this->precio.",".$this->unidad.",".$this->id_tipoFarmaco.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarFarmaco()
   { $objConex=new Conexion();
     $sql="UPDATE farmacos SET DESCRIPCION='".$this->descripcion."',PRECIO=".$this->precio.",UNIDAD=".$this->unidad." WHERE(ID_FARMACO=".$this->id_farmaco." )";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarFarmaco()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM farmacos WHERE(ID_FARMACO=".$this->id_farmaco.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }  
   
public function buscarFarmaco()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM farmacos WHERE(ID_FARMACO=".$this->id_farmaco.")";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarFarmaco()
   { $objConex=new Conexion();
     $sql="SELECT * FROM farmacos";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   }   
  } //clase
?>

