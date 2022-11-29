<?php
    include('../registrar/con_db.php');

    $search = $_POST['search'];

    if(!empty($search)){
        $query = "SELECT * FROM clientes WHERE nombre like '$search%'";
        $resultado = mysqli_query($conexion, $query);
        if (!$resultado){
            die('Error de consulta'. mysqli_error($conexion));
        }


        $json = array()
        while($row = mysqli_fetch_array($resultado)){
            $json[] = array(
                'nombre' => $row['nombre'],
                'apellido' => $row['apellido'],
                'direccion' => $row['direccion'],
                'zona' => $row['zona'],
                'id_cliente' => $row['id_cliente'],
            );

        }
        $json_string = json_encode($json);
        echo $json_string;
    }