<div class="formulario" id="agregar-encargue">
    <form method="POST" onsubmit="return validar_encargue();">

        <h2 style="text-aling: center; display:inline; font-size: 1.8em;">Registrar Encargue</h2>

        <select name="cliente" id="cliente-encargue" style="width:180px;">

            <option value="default" selected disabled hidden >Seleccione Cliente</option>

            <?php 
                include("../php/con_db.php");
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

        <div class="d-flex">
            <input type="text" name="maceta" disabled value="Conica" class="inputs-macetas">
            <div class="cantidad">
                <select name="cantidad_conicas" id="cantidad_conicas">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="d-flex">
            
            <input type="text" name="maceta" disabled value="Cuadrada Grande" class="inputs-macetas">
            <div class="cantidad">
                <select name="cantidad_cuad_grand" id="cantidad_cuad_grand">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        <div class="d-flex">
            
            <input type="text" name="maceta" disabled value="Rectangular" class="inputs-macetas">
            <div class="cantidad">
                <select name="cantidad_rectangulares" id="cantidad_rectangulares">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>
        
        <div class="d-flex">
            
            <input type="text" name="maceta" disabled value="Redonda" class="inputs-macetas">
            <div class="cantidad">
                <select name="cantidad_redondas" id="cantidad_redondas">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        <div class="d-flex">
            
            <input type="text" name="maceta" disabled value="Cuadrada Chica" class="inputs-macetas">
            <div class="cantidad">
                <select name="cantidad_cuad_chic" id="cantidad_cuad_chic">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </div>

        





        <br>    
        <div class="contenedor-submit">
            <input type="submit" value="Registrar" name="register-encargue" id="enviar" class="btn btn-primary">

        </div>
        <?php
            include('php/registrar/registrar_encargue.php');
        ?>
    </form>

    
</div>