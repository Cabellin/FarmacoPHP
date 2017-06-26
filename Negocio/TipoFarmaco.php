<?php
require_once("../Datos/Conexion.php");
class TipoFarmaco
{  private $id_tipo;
   private $descripcion_tipo;
 
   public function __construct(){}
   
   public function TipoFarmaco($id_tipo,$descripcion_tipo)
   { $this->id_tipo=$id_tipo;
     $this->descripcion_tipo=$descripcion_tipo;
   }
   //ACCESADORES
   public function getiId_tipo()			{return $this->id_tipo;}
   public function getDescripcion_tipo()	{return $this->descripcion_tipo;}

   //MUTANTES
   public function setId_tipo($id_tipo)						{$this->id_tipo=$id_tipo;}
   public function setDescripcion_tipo($descripcion_tipo)	{$this->descripcion_tipo=$descripcion_tipo;}

   //NEGOCIO
public function ingresarTipoFarmaco()
   { $objConex=new Conexion();
     $sql="INSERT INTO TIPO_FARMACO VALUES(".$this->id_tipo",'".$this->descripcion_tipo."')";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   }
   
public function modificarTipoFarmaco()
   { $objConex=new Conexion();
     $sql="UPDATE TIPO_FARMACO SET DESCRIPCION_TIPO='".$this->descripcion_tipo."' WHERE(ID_TIPO=".$this->id_tipo")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
    
public function eliminarTipoFarmaco()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="DELETE FROM TIPO_FARMACO WHERE(ID_TIPO=".$this->id_tipo")";
     $resul=$objConex->generarTransaccion($sql);
     return $resul;
   } 
public function buscarTipoFarmaco()
   { $objConex=new Conexion();//Instanciar clase Conexion
     $sql="SELECT * FROM TIPO_FARMACO WHERE(ID_TIPO=".$this->id_tipo")";
     $vector=$objConex->generarTransaccion($sql);
     return $vector;
   } 
public function listarTipoFarmaco()
   { $objConex=new Conexion();
     $sql="SELECT * FROM TIPO_FARMACO";
     $matrix=$objConex->generarTransaccion($sql);
     return $matrix;
   } 
    
}//clase   
?>