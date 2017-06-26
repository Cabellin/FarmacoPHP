<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <title>Farmaco</title>
    </head>
    <body>
        <?php 
		include('BarraMenuAdmin.php');
		 ?>
<img src="../Imagenes/baku.jpg" style="width:100%; height:100%; position:absolute; left:0px;top:0px; z-index:-1" />        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Ingresar/Modificar Farmaco</h3>
                            <form id="tab" action="../Controlador/TFarmaco.php" method="POST">
                                <div class="form-group">
                                    <label for="codigo">CODIGO :</label>
                                    <input type="text" class="form-control" id="codigo" placeholder="Ingresa Codigo" name="id_farmaco">
                                </div>
                                <div class="form-group">
                                    <label for="desripcion">Descripcion:</label>
                                    <input type="text" class="form-control" id="descripcion" placeholder="Ingresa Nombre" name="descripcion">
                                </div>
                                <div class="form-group">
                                    <label for="precio">PRECIO :</label>
                                    <input type="text" class="form-control" id="precio" placeholder="Ingresa Precio" name="precio">
                                </div>
                                <div class="form-group">
                                    <label for="precio">UNIDAD :</label>
                                    <input type="text" class="form-control" id="unidad" placeholder="Ingresa unidad" name="unidad">
                                </div>

                                <div class="form-group">
                                    <label for="precio">ID_Tipo_Farmaco :</label>
                                    <input type="text" class="form-control" id="id_tipoFarmaco" placeholder="Ingresa id_tipoFarmaco" name="id_tipoFarmaco">
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
                            <h3>Lista de Farmacos</h3>
                            <form id="tab" action="../Controlador/TFarmaco.php" method="POST">
                                <table class="table">
                                    <tr>
									    <th>Reg.</th>
                                        <th>ID FARMACO</th>
                                        <th>DESCRIPCION</th>
                                        <th>Precio</th>
                                        <th>Unidad</th>
                                        <th>id_tipoFarmaco</th>
                                        <th></th>

                                    </tr>

                                    <?php
                                    require_once '../Negocio/Farmaco.php';
                                    $objFar = new Farmacos();
                                    $datos = $objFar->listarFarmaco();
                                    $cont = 0;
                                    while ($reg = mysql_fetch_row($datos)) {
                                        $cont +=1;
                                        echo "<tr>";
                                        echo "<td>".$cont."</td>";
                                        echo "<td>".$reg[0]."</td>";
                                        echo "<td>".$reg[1]."</td>";
                                        echo "<td>".$reg[2]."</td>";
                                        echo "<td>".$reg[3]."</td>";
                                        echo "<td>".$reg[4]."</td>";
                                        //echo "<td>".$reg[5]."</td>";
                             echo "<td><form id='tab' action='../Controlador/TFarmaco.php' method='POST'>"."<input type='hidden' id='codigo' name='codigo' value=".$reg[0]."><button type='submit' class='btn btn-danger' name='OK2' value='Eliminar'>Eliminar</button></form></td>";
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