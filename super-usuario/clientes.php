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
            <div class="menu">

                <a href="index.html"> <img src="../images/emprendimiento.jpg" alt="logo" width="110px" height="50px"></a>
                
                   
                <h1 style="margin-right: 15px;">Super-Usuario: <span>Valentin</span></h1> 
                
                
                
            </div>

            <!-- super-usuario -->
            <div class="header super-usuario">


                <div class="fondo-aside">
                    <header class="aside">
                        
                        
                        <aside style="height: 300px;">
                            <h3>Emprendimiento Urbine</h3>

                                <ul >
                                    <li>
                                        <a href="#" onclick="alert('Se encuentra aqui')">Clientes
                                    </li>
                                    
                                    <li>
                                        <a href="encargues.php">Encargues</a>
                                    </li>
                        
                                    <li>
                                        <a href="ventas.php">Ventas</a>
                                    </li>
                                    <li>
                                        <a href= "logout.php">Salir</a>
                                    </li>
                                </ul>

                        </aside>
                        
                        
                    
                        
                    </header>
                </div>


                    

                <div class="container-fluid" style="">

                    <div class="top d-flex justify-content-center ">

                        <!-- Registrar Cliente -->
                        <div class="formulario needs-validation" id="agregar-cliente" >
                            <form method="POST" >
        
                                <h2>Registrar Cliente</h2>
                                <div>
                                    <input type="text" name="name"  id="nombre-cliente"  required placeholder="Nombre" id="nombre-persona"> 
                                </div>
                                <div>
                                    <input type="text" name="surname"  required  placeholder="Apellido" id="apellido-persona"> 
                                </div>
                                <div>
                                    <input type="text" name="direccion" id="direccion" placeholder="Direccion">  
                                </div>
                                <div>
                                    <input type="text" name="zona" id="zona" placeholder="Zona"> 
                                </div>             
                                <br>    
                                <div class="contenedor-submit">
                                    <input type="submit" value="Registrar" name="register-cliente" id="enviar-cliente" class="btn btn-primary">
        
                                </div>
                                <?php
                                    include('php/registrar/registrar_cliente.php');
                                ?>
                                <script src="js/main.js"> </script>
                            </form>
              
                        </div>
                           
                        <!-- Tabla clientes-->
                        <div class="right">
                            
                            <div class="col-12 busqueda_clientes" >
                                <h4 >
                                    Clientes
                                </h4>
                                <form action="">
                                    <input type="search">
                                    <input type="submit" id="search" class="form-control" value="Buscar">
                                </form>
                            </div>
                            <div class="bottom" id="tabla-clientes">
                                <table class="table table-responsive" >
                                    <tbody>

                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Direccion</th>
                                            <th>Zona</th>
                                            
                                            <th>Editar</th>
                                        </tr>

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script  src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
