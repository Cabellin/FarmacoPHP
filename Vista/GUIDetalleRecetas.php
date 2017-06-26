<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <title>Detalle Recetas</title>
    </head>
    <body>
        <?php 
		if(isset($_SESSION['id_perfil']))
             {  $id=$_SESSION['id_perfil'];
			    if($id == 1)
				{
					include('BarraMenuAdmin.php');
				}else if($id == 2)
				{
					include('BarraMenuConsulta.php');
				}else{
					include('BarraMenuPaciente.php');
				}
			 }
		
		 ?>
<img src="../Imagenes/baku.jpg" style="width:100%; height:100%; position:absolute; left:0px;top:0px; z-index:-1" />
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Ingresar/Modificar Detalle Recetas</h3>
                            <form id="tab" action="../Controlador/TDetalleRecetas.php" method="POST">
                              <div class="form-group">
                                    <label for="id">ID.FACTURA :</label>
                                    <select class="form-control" name="id">
                                        <?php
                                        require_once '../Negocio/DetalleRecetas.php';
                                        $ojFac = new DetalleRecetas();
                                        $datos = $ojFac->listarDetalleRecetas();

                                        while ($reg = mysql_fetch_row($datos)) {
                                            echo "<option value='" . $reg[0] . "'>" . $reg[0] . " | " . $reg[1] . " </option>";
                                        }
                                        ?>
                                    </select>   
									
                                </div>
                                  <div class="form-group">
                                    <label for="codigo">Detalle Recetas()</label>
                                    <select class="form-control" name="codigo">
                                        <?php
                                        require_once '../Negocio/DetalleRecetas.php';
                                        $objPro = new DetalleRecetas;
                                        $datos2 = $objPro->listarDetalleRecetas();

                                        while ($reg2 = mysql_fetch_row($datos2)) {
                                            echo "<option value='" . $reg2[0] . "'>" . $reg2[0] . " | " . $reg2[1] . " </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cant">CANT :</label>
                                    <input type="text" class="form-control" id="cant" placeholder="Ingresa Cantidad" name="cant">
                                </div>

                                <button type="submit" class="btn btn-primary" name="OK" value="Ingresar">Ingresar</button>
                                <button type="submit" class="btn btn-primary" name="OK1" value="Modificar">Modificar</button>
                            </form> 
                        </div>

                    </div>




                </div>

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Lista de Facturas</h3>
                            <form id="tab" action="../Controlador/TDetalle.php" method="POST">
                                <table class="table">
                                    <tr>
									    <th>Reg.</th>
                                        <th>ID.FACT.</th>
                                        <th>COD.PROD</th>
                                        <th>CANTIDAD</th>
                                        <th></th>

                                    </tr>

                                    <?php
                                    require_once '../Negocio/DetalleRecetas.php';
                                    $objDet = new DetalleRecetas();
                                    $datos = $objDet->listarDetalleRecetas();
                                    $cont = 0;


                                    while ($reg = mysql_fetch_row($datos)) {
                                        $cont +=1;
                                        echo "<tr>";
                                        echo "<td>".$cont."</td>";
                                        echo "<td>".$reg[0]."</td>";
                                        echo "<td>".$reg[1]."</td>";
                                        echo "<td>".$reg[2]."</td>";
                             echo "<td><form id='tab' action='../Controlador/TDetalle.php' method='POST'>"."<input type='hidden' id='id' name='id' value=".$reg[0]."><button type='submit' class='btn btn-danger' name='OK2' value='Eliminar'>Eliminar</button></form></td>";
                                        echo "</tr>";
                                    }
                                    ?>

                                </table>
                            </form> 
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </body>
</html>