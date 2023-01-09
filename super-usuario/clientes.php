<?php include('../php/con_db.php');?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Settings Page -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="Urbine01, Valentín Urbine, Valen Urbine, valen urbine, valen, urbine, Urbine, Valen, Valentín, valentín, valentin Hecu01, sitio de Valentin">
        <meta name="author" content="Valentín Urbine">
        <meta name="description" content="Éste es mi primer sitio web. Soy Valentín Urbine.">
        <link rel="icon" href="../images/favicon.ico"> 

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- CSS LINK -->
        <link rel="stylesheet" href="../styles/menu.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/styles.css">
        
        <link rel="stylesheet" href="../styles/footer.css">
        <link rel="stylesheet" href="styles/super-usuario.css">
        <link rel="stylesheet" href="styles/encargar.css">
        <link rel="stylesheet" href="styles/clientes-php.css">
        


        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        

        <!-- JAVASCRIPT LINK -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <title>Super usuario</title>
    </head>

    <body>

        <div class="contenedor">
            
            <!-- Menu -->
            <?php require 'partials/header.php';?>

            <!-- super-usuario -->
            <div class="header super-usuario">

                <!-- Aside -->
                <?php require 'partials/aside.php'?>

                    

                <div class="container-fluid" style="">

                    <div class="top d-flex justify-content-center ">

                        <!-- Registrar Cliente -->
                        <?php  require 'partials/clientes/registrar_cliente.php';?>
                        
                           


                        <!-- Tabla clientes-->
                        <?php  require 'partials/clientes/tabla_clientes.php';?>
                        
                    </div>
                    
                </div>             



            </div>

 

            


            <footer class="footer">
                <div class="usuario">
                    <div class="footer-content-img">
                        <img src="../images/emprendimiento.jpg" alt="Logo de mi pagina">
                    </div>
                    <div class="datos">
                        <ul>
                            <li><strong>Nombres</strong>: Valentin</li>
                            <li><strong>Apellido</strong>: Valentin</li>
                            <li><strong>Nick</strong>: Urbine01</li>
                            <li><strong>Rol</strong>: Super Usuario <!-- o Usuario--></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="description-app" >
                    <p>
                        <strong>
                            Emprendimiento urbine <br>
                            Ésta app es personal, orientada a la venta de macetas,  
                        </strong>
                    </p>
                </div>
            </footer>

        </div>



        
        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>        
        <script src="js/ajax.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
