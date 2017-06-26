<?php
class Conexion
{ private $serv="localhost";
  private $usuario="root";
  private $clave="";
  private $bdatos="bd_farmacos";
  private $conex;
  
  public function __construct(){}
  
  public function abrirConexion()
  { $this->conex=mysql_connect($this->serv,$this->usuario,$this->clave) or die ('ERROR DE UBICACION DE URL :'.mysql_error());
    mysql_select_db($this->bdatos,$this->conex);
	return $this->conex;  
  }
  public function cerrarConexion()
  {  
     mysql_close($this->conex) or die ('ERROR DE CIERRE EN URL '.mysql_error);
  }
  public function generarTransaccion($sql)
  { $this->abrirConexion();
    $resul=mysql_query($sql,$this->conex) or die ('ERROR DE CONEXION'.mysql_error());  
	return $resul;
  }
 }
?>
