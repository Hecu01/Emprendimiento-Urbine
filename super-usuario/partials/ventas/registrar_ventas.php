<div class="formulario" id="registrar-venta">
    <form method="POST" onsubmit="return validar_venta();">

        <h2>Venta</h2>

        <select name="cliente" id="cliente_venta" style="width:180px;">

            <option value="default" selected disabled hidden required>Seleccione Cliente</option>

            <?php 
                include("../../php/con_db.php");
                $getClientes1 = "select * from clientes order by apellido ";
                $getClientes2 = mysqli_query($conexion, $getClientes1);
                while ($row =mysqli_fetch_array($getClientes2))
                {
                    $id_cliente = $row['id_cliente'];
                    $nombre = $row['nombre'];
                    $apellido = $row['apellido'];
                    $direccion = $row['direccion'];
                    $zona = $row['zona'];
                    ?>
                    <option value="<?php echo $id_cliente; ?>"> <?php echo $apellido." ".$nombre; ?></option>
                    <?php
                }
            ?>
    
            
        </select>

        <select name="maceta" id="maceta_venta" style="width:180px;">
            
            <option value="default" selected disabled hidden id="seleccione_maceta">Seleccione Maceta</option>

            <?php 
                include("../php/con_db.php");
                $getClientes1 = "select * from macetas order by id_maceta ";
                $getClientes2 = mysqli_query($conexion, $getClientes1);
                while ($row =mysqli_fetch_array($getClientes2))
                {
                    $id_maceta = $row['id_maceta'];
                    $maceta = $row['maceta'];
                    $precio = $row['precio'];

                    ?>
                    <option value="<?php echo $id_maceta; ?>"> <?php echo $maceta." $".$precio; ?></option>
                    <?php
                }
            ?>
        </select>
        
        <textarea name="observacion" id="mensajeform" cols="21" rows="2" placeholder="Observacion" ></textarea>
        <div class="cantidad">
            <label for="cantidad" style="font-weight: 800;">CANTIDAD</label>
            <select name="cantidad_macetas" id="cantidad">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <br>
        <div class="contenedor-submit">
            
            <input type="submit" value="Registrar" name="register-venta" id="enviar" class="btn btn-primary">

        </div>
        
        <?php
            include('php/registrar/registrar_venta.php');
        ?>
    </form>

    
</div>