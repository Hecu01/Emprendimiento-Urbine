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
        <link rel="icon" href="images/favicon.ico"> 

        <!-- Bootstrap 5 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- CSS LINK -->
        <link rel="stylesheet" href="../styles/menu.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/styles.css">
        <link rel="stylesheet" href="styles/super-usuario.css">
        <link rel="stylesheet" href="styles/encargar.css">
        


        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- JAVASCRIPT LINK -->
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <title>Super usuario</title>
    </head>

    <body>


        <div class="contenedor">
            
            <!-- Menu -->
            <div class="menu">

                <a href="index.html"> <img src="../images/logo.jpg" alt="logo" width="90px" height="60px"></a>
                
                <h1 style="margin-right: 15px;">Super-Usuario: <span>Valentin</span></h1> 
                
                
                
            </div>

            <!-- super-usuario -->
            <div class="header super-usuario">

                
                <aside class="aside sticky-top" id="aside">
 
                    <ul class="ul-unico">
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Pedidos</a></li>
                        <li><a href="">Stock</a></li>
                        <li><a href="">Agregar macetas</a></li>
                        <li><a href="">Agregar impresion 3d</a></li>
                        <li><a href="">Consultas</a></li>
                       
                    </ul>
                </aside>

                    
          
                <div class="formulario" id="agregar-cliente">
                    <form method="POST" >

                        <h2>Registrar Cliente</h2>
                        <div>

                            <input type="text" name="name" placeholder="Nombre" id="nombre-persona"> <input type="checkbox" name="check" id="">
                        </div>
                

                        <div>

                            <input type="text" name="surname" placeholder="Apellido" id="apellido-persona"> <input type="checkbox" name="check" id="">
                        </div>

                        <div>

                            <input type="text" name="tel" id="tel" placeholder="Telefono" disabled>  <input type="checkbox" name="check" checked id="">
                        </div>

                        <div>

                            <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad"> <input type="checkbox" name="check" id="">
                        </div>
                
                        <br>    
                        <div class="contenedor-submit">
                            
                            <input type="submit" value="Registrar" name="register-cliente" id="enviar" class="btn btn-primary">

                        </div>
                        
                        <?php
                            include('registrar_cliente.php');
                        ?>
                    </form>

                    
                </div>
                  
                <div class="formulario" id="agregar-cliente">
                    <form method="POST" >

                        <h2>Venta</h2>
                        <select name="cliente" id="cliente">
                            <option value="default" selected disabled hidden>Seleccione Cliente</option>
                            <option value="1">Valentin Urbine</option>
                            <option value="2">Celeste Sánchez</option>
                            <option value="3">Patricia Perez</option>
                            <option value="4">Mariana Ramos</option>
                            <option value="5">Otro</option>
                        </select>

                        <select name="maceta" id="maceta">
                            
                            <option value="default" selected disabled hidden>Seleccione Maceta</option>
                            <option value="1">Cónica</option>
                            <option value="2">Cuadrada</option>
                            <option value="3">Redonda</option>
                            <option value="4">Rectangular</option>
                            <option value="5">Cubo</option>
                        </select>
                        
                        <div>
                            <label for="precio">PRECIO</label>
                            <input type="text" id="precio" disabled style="width: 50px;">
                        </div>
                        <br>
                        <div class="contenedor-submit">
                            
                            <input type="submit" value="Registrar" name="register-venta" id="enviar" class="btn btn-primary">

                        </div>
                        
                        <?php
                            include('registrar_venta.php');
                        ?>
                    </form>

                    
                </div>
        



            </div>

            <script type="text/javascript">

                $(document).ready(function(){
                
                      var height = $(window).height();
                
                      $('#aside').height(height);
                });
                
            </script>
            


            <footer>
                <h1>Final de pagina</h1>
            </footer>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="jquery-3.6.0.min.js"></script>
    </body>
    <script src="javascript/main.js"></script>
</html>
