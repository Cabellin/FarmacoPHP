<?php
$id_perfil="";
if(isset($_POST["usuario"]) & $_POST["usuario"]!="" )
{ $usuario=$_POST["usuario"];}
if(isset($_POST["clave"]) & $_POST["clave"]!="" )
{ $clave=$_POST["clave"];}
if(isset($_POST["id_perfil"]) & $_POST["id_perfil"]!="" )
{ $id_perfil=$_POST["id_perfil"];}
  
  if(isset($_POST["OK"]) && $_POST["OK"]=="Entrar")
  { $val=0;
    $val=evaluarUsuario($usuario,$clave);
    if ($val==1) 
	{  session_start();
       $_SESSION['usuario']=$usuario;
       $_SESSION['id_perfil']=$id_perfil;
	   //$_SESSION['perfil']=$perfil;
	   header("Location:Vista/Inicio.php");
	}  
	else         header("Location:GUILogin.php");
  }
  
  function evaluarUsuario($usuario,$clave)
  { include("Datos/Conexion.php");
    $objConex=new Conexion();
    $objConex->abrirConexion();
    $sql="SELECT * FROM Usuarios WHERE(login_usuario='".$usuario."' && pass_usuario='".$clave."')";
	$datos=$objConex->generarTransaccion($sql);
    $reg=$reg=mysql_fetch_row($datos);
	if($reg[1]==$usuario && $reg[2]==$clave) 
	{   $perfil=$reg[3];
      $id_perfil=$reg[7];
        echo "PERFIL RESCATADO :".$reg[3];
        echo "PERFIL :".$perfil;
		return 1;
	}
	else return 0;  
  }

?>
