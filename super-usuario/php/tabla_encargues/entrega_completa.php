<?php
    #incluir conexion a ladb
    include('con_db.php');
    
    #Obtener por metodo get la id del encargue al hacer onclick en la tabla

    if(isset($_GET["id_encargue"])){
        $id = $_GET['id_encargue'];
        # actualizar table
        $sql = "UPDATE encargues SET entregado = '1' WHERE id_encargue = '$id'";
        $query = mysqli_query($conexion, $sql);
        if($query){
            ?> 
            <script>
                alert('Entregado');
            </script>
            <?php
        }
    }



?>