<?php
require_once("../Datos/Conexion.php");
class DetalleRecetas
{  private $id_receta;
   private $id_farmaco;
   private $cantidad;
   private $sub_total;
 
   public function __construct(){}
   
   public function DetalleRecetas($id_receta,$id_farmaco,$cantidad,$sub_total)
   { $this->id_receta=$id_receta;
     $this->id_farmaco=$id_farmaco;
	 $this->cantidad=$cantidad;
	 $this->sub_total;
   }
   //ACCESADORES
   public function getId_receta()    {return $this->id_receta;}
   public function getId_farmaco()   {return $this->id_farmaco;}
   public function getCantidad()     {return $this->cantidad;}
   public function getSub_total()    {return $this->sub_total;}

   //MUTANTES
   public function setId_receta($id_receta)     {$this->id_receta=$id_receta;}
   public function setId_farmaco($id_farmaco)	{$this->id_farmaco=$id_farmaco;}
   public function setCantidad($cantidad)   	{$this->cantidad=$cantidad;}
   public function setSub_total($sub_total)   	{$this->sub_total=$sub_total;}


   //NEGOCIO
public function ingresarDetalleRecetas()
   { $objConex=new Conexion();
     $sql="INSERT INTO DETALLE_RECETAS VALUES('".$this->id_receta."','".$this->id_farmaco."',".$this->cantidad.",".$this->sub_total.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarDetalleRecetas()
   { $objConex=new Conexion();
     $sql="UPDATE DETALLE_RECETAS SET CANTIDAD=".$this->cantidad.", SUB_TOTAL=".$this->sub_total." WHERE(ID_RECETA=".$this->id_receta." && ID_FARMACO=".$this->id_farmcaco.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarDetalleRecetas()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM DETALLE_RECETAS WHERE(ID_RECETA=".$this->id_receta.")";// && CODIGO=".$this->codigo.")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
public function buscarDetalleRecetas()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM DETALLE_RECETAS WHERE(ID_RECETA=".$this->id_receta." && ID_FARMACO=".$this->id_farmaco.")";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarDetalleRecetas()
   { $objConex=new Conexion();
     $sql="SELECT * FROM DETALLE_RECETAS";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   } 
    
}//clase   
?>