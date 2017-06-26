<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <title>Registrar</title>
    </head>
    <body>

<img src="../Imagenes/baku.jpg" style="width:100%; height:100%; position:absolute; left:0px;top:0px; z-index:-1" />        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Ingresar/Modificar Usuario</h3>
                            <form id="tab" action="../Sesion/TUsuario.php" method="POST">
                                <div class="form-group">
                                    <label for="id_usuario">ID USUARIO :</label>
                                    <input type="text" class="form-control" id="id_usuario" placeholder="Ingresa ID" name="id_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="login_usuario">LOGIN:</label>
                                    <input type="text" class="form-control" id="login_usuario" placeholder="Ingresa Login" name="login_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="pass_usuario">PASSWORD :</label>
                                    <input type="password" class="form-control" id="pass_usuario" placeholder="Ingresa Password" name="pass_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="nombre_usuario">NOMBRE :</label>
                                    <input type="text" class="form-control" id="unidad" placeholder="Ingresa Nombre" name="nombre_usuario">
                                </div>
                                <div class="form-group">
                                    <label for="apellido_usuario">APELLIDO :</label>
                                    <input type="text" class="form-control" id="apellido_usuario" placeholder="Ingresa Apellido" name="apellido_usuario">
                                </div>
								<div class="form-group">
                                    <label for="correo_usuario">CORREO :</label>
                                    <input type="text" class="form-control" id="correo_usuario" placeholder="Ingresa Correo" name="correo_usuario">
                                </div>
								<div class="form-group">
                                    <label for="fecha_nacimiento_usuario">Fecha Nacimiento:</label>
                                    <input type="date" class="form-control" id="fecha_nacimiento_usuario" placeholder="Fecha Nacimiento" name="fecha_nacimiento_usuario">
                                </div>

                                <div class="form-group">
                                    <label for="id_perfil">ID Perfil :</label>
                                    <input type="text" class="form-control" id="id_perfil" placeholder="Ingresa Perfil" name="id_perfil">
                                </div>
                                <button type="submit" class="btn btn-primary" name="OK" value="Registrar">Ingresar</button>
                            </form> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>