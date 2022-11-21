<?php 
    # Conexion
    include("../php/con_db.php");
    
    # Al apretar el boton registrar cliente...
    if (isset ($_POST['register-venta'])){
        
        # Si en cada campo hay al menos 1 caracter
        if (strlen($_POST['cliente']) >= 1 || strlen($_POST['maceta']) >=1 || strlen($_POST['observacion']) >= 1)
        { 

            # Los datos, sacandole los espacios (TRIM) al principio y al final
            $cliente = trim($_POST['cliente']);
            $maceta = trim($_POST['maceta']);
            $observacion = trim($_POST['observacion']);
            
            
            $consulta = "INSERT INTO ventas(id_cliente, id_maceta, observacion) VALUES ('$cliente', '$maceta','$observacion')";
            $resultado = mysqli_query($conexion, $consulta);

            # Insertar datos


            if ($resultado){
                ?> 
                <br>
                <div class="alert alert-dismissible fade show enviado" id="consulta-enviada" role="alert" >
                    <strong>¡Felicidades!</strong> La consulta fue realizada con éxito.
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