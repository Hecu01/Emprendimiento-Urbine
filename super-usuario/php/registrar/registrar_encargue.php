<?php 
    # Conexion
    include("con_db.php");
    # Al apretar el boton registrar cliente...
    if (isset ($_POST['register-encargue'])){
        
        # Si en cada campo hay al menos 1 caracter
        if (strlen($_POST['cantidad_conicas']) >0 || strlen($_POST['cantidad_cuad_grand']) > 0 || strlen($_POST['cantidad_rectangulares']) >0 || strlen($_POST['cantidad_redondas']) >0 || strlen($_POST['cantidad_cuad_chic']) >0){ 
            
            # Los datos, sacandole los espacios (TRIM) al principio y al final
            $cliente = trim($_POST['cliente']);
            $cant_conicas = trim($_POST['cantidad_conicas']);
            $cant_cuad_gran = trim($_POST['cantidad_cuad_grand']);
            $cant_rectangulares = trim($_POST['cantidad_rectangulares']);
            $cant_redondas = trim($_POST['cantidad_redondas']);
            $cant_cuad_chic = trim($_POST['cantidad_cuad_chic']);
            
            
            $consulta = "INSERT INTO encargues(id_cliente, conicas, cuadrada_grandes, rectangulares, redondas, cuadrada_chicas) VALUES ('$cliente', '$cant_conicas', '$cant_cuad_gran', '$cant_rectangulares', '$cant_redondas', '$cant_cuad_chic')";
            $resultado = mysqli_query($conexion, $consulta);

            # Insertar datos


            if ($resultado){
                ?> 
                <br>
                <div class="alert alert-dismissible fade show enviado" id="consulta-enviada" role="alert" >
                    <strong>¡Encargado con éxito!</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick=""></button>
                </div>
                <script>
                    window.location.href = "#consulta-enviada";
                </script>

                <?php

            } else{
                ?>
                <br>
                <div class="alert alert-danger alert-dismissible fade show error" id="no-enviada-la-consulta" role="alert">
                    <strong>¡Ups!</strong> Ha ocurrido un error inesperado...
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <script>
                    window.location.href = "#no-enviada-la-consulta";
                </script>
                <?php
            }            
            
        


        } else{
            ?> 
            <br>
            <div class="alert alert-dismissible fade show error" id="falta-completar-campos" role="alert" >
                <strong>Error</strong> Todos los campos vacios...
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <script>
                window.location.href = "#falta-completar-campos";
            </script>
            <?php
        }




    }


?>