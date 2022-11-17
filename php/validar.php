<?php
    # Recibo los datos del login
    $email = $_POST['correo'];
    $contraseña = $_POST['password'];
    
    # Inicia sesion
    session_start();
    $_SESSION['correo'] = $email;
    
    # Conexión a la base de datos
    include('con_db.php');
    
    # Consulta
    $consulta = "SELECT * FROM administradores WHERE correo ='$email' AND  contraseña ='$contraseña';";
    $resultado = mysqli_query($conexion, $consulta);

    # compraración de filas con las de la tabla
    $filas =  mysqli_num_rows($resultado);

    # Validación... si es TRUE va al home.php, en caso de FALSE devuelve al login
    if($filas){
        ?> 
        
        <script>alert("Bienvenido");</script>
        <?php
        header("location:../super-usuario/");

    } 
    else{

        ?> 
        <script>alert("No pudiste autenticarte");</script>
        <?php

            
            header("location:../login_sudo.php");
        ?>
        <?php 

    }

    # 
    mysqli_free_result($resultado);
    
    mysqli_close($conexion);
?>

