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
        


        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        

        <!-- JAVASCRIPT LINK -->
        <script src="https://unpkg.com/scrollreveal"></script>
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
                                        <a href="clientes.php">Clientes</a>
                                    </li>
                                    
                                    <li>
                                        <a href="encargues.php">Encargues</a>
                                    </li>
                        
                                    <li>
                                        <a href="#" onclick="alert('Se encuentra aqui');">Ventas</a>
                                    </li>
                                    <li>
                                        <a href= "logout.php">Salir</a>
                                    </li>
                                </ul>

                        </aside>
                        
                        
                    
                        
                    </header>
                </div>


                    

                <div class="container">

                    <div class="top d-flex" >
    
                        <!-- Registrar Venta --> 
                        <div class="formulario" id="registrar-venta">
                            <form method="POST" onsubmit="return validar_venta();">
        
                                <h2>Venta</h2>
        
                                <select name="cliente" id="cliente_venta" style="width:180px;">
        
                                    <option value="default" selected disabled hidden required>Seleccione Cliente</option>
        
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
                                    <select name="cantidad_ventas" id="cantidad">
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
                        
                        
                    </div>
                    


                    <!--$_COOKIE
                        CREATE VIEW vistas_encargue AS
                        SELECT id_encargue,fecha as fecha_encargue, CONCAT(nombre, ' ', apellido) as cliente, 
                        (conicas + cuadrada_grandes + cuadrada_chicas + redondas + rectangulares) as macetas_encargadas, entregado,
                         medio_entregado, rechazado  FROM encargues JOIN clientes on 
                        encargues.id_cliente = clientes.id_cliente;
                        
                    -->
                    <!-- Tabla encarges-->
                    <div class="bottom" style="margin:35px auto;">
                        
                        <table class="table table-responsive" salign="center" >
                            <thead>
                                <th>Fecha</th>
                                <th>Clientes</th>
                                <th>Encargadas</th>
                                <th>Entregado</th>
                                <th>Incompleto</th>
                                <th>Rechazado</th>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM vistas_encargue WHERE entregado = 0 AND medio_entregado = 0 and rechazado = 0";
                                $resultado = mysqli_query($conexion, $sql);
                                while($row = mysqli_fetch_assoc($resultado)) { 
                                ?>
                                <tr>
                
                                    <td><?php echo $row['fecha_encargue']; ?> </td>
                                    <td><?php echo $row['cliente']; ?></td>
                                    <td><?php echo $row['macetas_encargadas']; ?></td>
                                    
                                    <td>
                                        <a href="php/tabla_encargues/entrega_completa.php?id_encargue=<?php echo $row['id_encargue'];?>">
                                            <button class="btn btn-success" type="submit" name="entregar_pedido"><i class="fa-solid fa-check"></i></button>
                                        </a>
                                        <?php include('php/tabla_encargues/entrega_completa.php');?>
                                    </td>
                                        
                                    <td>
                                        <a href="php/tabla_encargues/entrega_incompleta.php?id_encargue=<?php echo $row['id_encargue'];?>">
                                            <button class="btn btn-warning" type="submit" name ="btn-entregado" ><i class="fa-solid fa-bell" style="color:#fff;"></i></button>
                                            
                                        </a>
                                        
                                        <?php include('php/tabla_encargues/entrega_incompleta.php');?>

                                    </td>
                                        
                                    <td> 
                                        <a href="php/tabla_encargues/entrega_cancelada.php?id_encargue=<?php echo $row['id_encargue'];?>">
                                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                                        </a>
                                        
                                        <?php include('php/tabla_encargues/entrega_cancelada.php');?>
                                    </td>
                                </tr>
                                <?php } 
                                
                                ?>
                            </tbody>
                        </table>
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

        <script  src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="jquery-3.6.0.min.js"></script>
    </body>
    <script src="javascript/main.js"></script>
</html>
