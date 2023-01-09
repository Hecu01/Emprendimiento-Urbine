<table class="table table-responsive" salign="center" >
    <thead>  
        <th>id_venta</th>
        <th>fecha</th>
        <th>cliente</th>
        <th>maceta</th>
        <th>cantidad</th>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT * FROM vistas_ventas ORDER BY id_venta";
        $resultado = mysqli_query($conexion, $sql);
        while($row = mysqli_fetch_assoc($resultado)) { 
        ?>
        <tr>

            <td><?php echo $row['id_venta']; ?> </td>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['cliente']; ?> </td>
            <td><?php echo $row['maceta']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>

        <?php } 
        
        ?>
    </tbody>
</table>