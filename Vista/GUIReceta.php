<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <title>Receta</title>
    </head>
    <body>
        <?php include('../Vista/BarraMenu.php'); ?>
<img src="../Imagenes/baku.jpg" style="width:100%; height:100%; position:absolute; left:0px;top:0px; z-index:-1" />
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Ingresar/Modificar Receta</h3>
                            <form id="tab" action="../Controlador/TRecetas.php" method="POST">
                                <div class="form-group">
                                    <label for="id_receta">ID.recetas :</label>
                                    <input type="text" class="form-control" id="id" placeholder="ID Receta" name="id_receta">
                                </div>
                                <div class="form-group">
                                    <label for="fecha_emision">Fecha de emision:</label>
                                    <input type="date" class="form-control" id="fecha_emision" placeholder="Fecha de Emisión" name="fecha_emision">
                                </div>
                                                                        <div class="form-group">
                                    <label for="total_receta">Total Receta :</label>
                                    <input type="text" class="form-control" id="total_receta" name="total_receta">
                                </div>
                                                                <div class="form-group">
                                    <label for="estado">Estado :</label>
                                    <input type="text" class="form-control" id="estado" name="estado">
                                </div>
                                                                <div class="form-group">
                                    <label for="id_usuario">Id usuario:</label>
                                    <input type="text" class="form-control" id="id_usuario" name="id_usuario">
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
                            <h3>Lista de Recetas</h3>
                            <form id="tab" action="../Controlador/TRecetas.php" method="POST">
                                <table class="table">
                                    <tr>
									    <th>Reg.</th>
                                        <th>ID Receta</th>
                                        <th>Fecha de emision</th>
                                        <th>Total Receta</th>
                                        <th>Estado</th>
                                        <th>Id Usuario</th>
                                        <th></th>

                                    </tr>
                                    <?php
                                    require_once '../Negocio/Recetas.php';
                                    $objRec = new Receta();
                                    $datos = $objRec->listarReceta();
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
                                       // echo "<td>".$reg[6]."</td>";                                                                                                                                                            
                             echo "<td><form id='tab' action='../Controlador/TRecetas.php' method='POST'>"."<input type='hidden' id_receta='id_receta' name='id_receta' value=".$reg[0]."><button type='submit' class='btn btn-danger' name='OK2' value='Eliminar'>Eliminar</button></form></td>";
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