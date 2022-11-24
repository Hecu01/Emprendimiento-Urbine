<?php 
    # Conexion
    include("con_db.php");
    
    # Al apretar el boton registrar cliente...
    if (isset ($_POST['register-cliente'])){
        
        # Si en cada campo hay al menos 1 caracter
        if (strlen($_POST['name']) >= 1 || strlen($_POST['surname']) >=1 || strlen($_POST['direccion']) >= 1 || strlen($_POST['zona']) >= 1)
        { 

            # Los datos, sacandole los espacios (TRIM) al principio y al final
            $name = trim($_POST['name']);
            $surname = trim($_POST['surname']);
            $direccion = trim($_POST['direccion']);
            $zona = trim ($_POST['zona']);

            # Busca los repetidos en la tabla
            function buscarRepetidos($name, $surname, $direccion, $zona, $conexion){
                $sql = "SELECT * FROM clientes WHERE nombre='$name' AND apellido='$surname' AND direccion='$direccion' AND zona='$zona'";
            
                $resultado1 = mysqli_query($conexion, $sql);
                if(mysqli_num_rows($resultado1) >0){
                    return 1;
                }else{
                    return 0;
                }
 
            }




            # Si estan repetidos... entonces            
            if (buscarRepetidos($name, $surname, $direccion, $zona, $conexion) == 1){
                ?>
                <br>
                <div class="alert alert-danger alert-dismissible fade show error" id="no-enviada-la-consulta" style="border: none;" role="alert">
                    <strong>Error!</strong> Este cliente ya existe
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <script>
                    window.location.href = "#no-enviada-la-consulta";
                </script>
                <?php
            }else{
                # Insertar datos
                $consulta = "INSERT INTO clientes(nombre, apellido, direccion, zona) VALUES ('$name', '$surname','$direccion','$zona')";
                $resultado = mysqli_query($conexion, $consulta);


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
            }
            
            
            # Buscar repetidos en la tabla [clientes]
 

            # Autentificación


        } else{
            ?> 
            
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