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