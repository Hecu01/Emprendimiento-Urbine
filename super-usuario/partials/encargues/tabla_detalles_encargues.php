<div class="bottom">
    <h1>DETALLES</h1>
    
    <div class="bottom"  id="table-encargues"style="width: 500px; overflow-x: scroll; background:#fff; margin:30px auto;">
        
        <table class="table table-responsive" >
            <thead>
                <th>Fecha</th>
                <th>Clientes</th>
                <th>Conicas</th>
                <th>Cuadrada</th>
                <th>Rectangular</th>
                <th>Redonda</th>
                <th>Cubo</th>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM vistas_encargue_con_detalles  WHERE entregado = 0 AND medio_entregado = 0 and rechazado = 0";
                $resultado = mysqli_query($conexion, $sql);
                while($row = mysqli_fetch_assoc($resultado)) { 
                ?>
                <tr>

                    <td><?php echo $row['fecha_encargue']; ?> </td>
                    <td><?php echo $row['cliente']; ?></td>
                    <td><?php echo $row['conicas']; ?></td>
                    <td><?php echo $row['cuadradas']; ?></td>
                    <td><?php echo $row['rectangulares']; ?></td>
                    <td><?php echo $row['redondas']; ?></td>
                    <td><?php echo $row['cubos']; ?></td>
                    
                    <td>
                        <a href="php/tabla_encargues/entrega_completa.php?id_encargue=<?php echo $row['id_encargue'];?>">
                            <button class="btn btn-success" type="submit" name="entregar_pedido"><i class="fa-solid fa-check"></i></button>
                        </a>
                        <?php include('php/tabla_encargues/entrega_completa.php');?>
                    </td>
                        
                    <td>
                        <a href="php/tabla_encargues/entrega_incompleta.php?id_encargue=<?php echo $row['id_encargue'];?>">
                            <button class="btn btn-warning" type="submit" name ="btn-entregado" ><i class="fa-solid fa-bell" style="color:#fff;"></i></button>
                            
                        </a>
                        
                        <?php include('php/tabla_encargues/entrega_incompleta.php');?>

                    </td>
                        
                    <td> 
                        <a href="php/tabla_encargues/entrega_cancelada.php?id_encargue=<?php echo $row['id_encargue'];?>">
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </a>
                        
                        <?php include('php/tabla_encargues/entrega_cancelada.php');?>
                    </td>
                </tr>
                <?php } 
                
                ?>
            </tbody>
        </table>
    </div>
</div>