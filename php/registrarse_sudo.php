<?php
    # Incluye conexion a la db
    include('con_db.php');

    # Validación de datos
    if(isset($_POST['registrar'])){
        # Datos mayores a 1 caracter
        if(strlen($_POST['name']) >= 1 &&  strlen($_POST['surname']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){
            
            # Datos del formulario
            $nombre = trim($_POST['name']);
            $apellido =trim($_POST ['surname']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            
            # Consulta
            $query = "INSERT INTO administradores(nombre, apellido, correo, contraseña) VALUES ('$nombre','$apellido','$email','$password');";
            $resultado = mysqli_query($conexion, $query);

            if($resultado){
                ?> 
                <script> 
                    alert("registro exitoso");
                    window.location = href
                </script>

                


                <?php 
            } else{

                ?> 
                <script> alert("Ups ocurrio un herror");</script>

                <?php 
            }
        } else{
            
        }
    }



?>