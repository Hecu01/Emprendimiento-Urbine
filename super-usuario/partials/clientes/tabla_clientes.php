<div class="right">
    <div class="col-12 busqueda_clientes" >
        <h4 >Clientes</h4>

        <form action="" method="POST" >
            <input type="search" name="campo" id="campo" placeholder="Buscar Cliente">
            <input type="submit" value="Buscar" class="btn btn-warning" >
        </form>
    </div>

    <div class="bottom" id="tabla-clientes">
        <table class="table table-responsive" >
            <thead>
                <th>Id  </th>
                <!-- <br><button style="width: 23px; padding: 0;" class="btn btn-primary"><i class="fa-solid fa-arrow-down-a-z"></i></button> -->
                <th>Nombre </th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Zona </th>
                <th>Editar</th>
            </thead>
            <tbody id="content">

                <?php

                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($conexion, $sql);
                    while($row = mysqli_fetch_assoc($resultado)) { 
                ?>


                <tr>
                    <td><?php echo $row['id_cliente']; ?> </td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['apellido']; ?></td>
                    <td><?php echo $row['direccion']; ?></td>
                    <td><?php echo $row['zona']; ?></td>
                    <td>
                        <a href="php/tabla_encargues/entrega_completa.php?id_encargue=<?php echo $row['id_cliente'];?>">
                            <button class="btn btn-success" type="submit" name="entregar_pedido"><i class="fa-solid fa-pen-to-square"></i></button>
                        </a>
                    </td>                                
                </tr>
                <?php } 
              
                ?>


            </tbody>

        </table>


    </div>
</div>