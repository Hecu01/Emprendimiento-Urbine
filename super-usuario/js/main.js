// Registrar cliente
function validar_encargue (){

    let cliente, conicas, cuadradas_grandes, rectangulares, redondas, cuadradas_chicas, mensaje_error;

    cliente = document.getElementById('cliente-encargue').value ;
    conicas = document.getElementById('cantidad_conicas').value ;
    cuadradas_grandes = document.getElementById('cantidad_cuad_grand').value ;
    rectangulares = document.getElementById('cantidad_rectangulares').value ;
    redondas = document.getElementById('cantidad_redondas').value ;
    cuadradas_chicas = document.getElementById('cantidad_cuad_chic').value ;

    
    if (isNaN(cliente)){
        
        alert("Elija un cliente");
        return false;
    }
    else {
        
        if(conicas === "0" && cuadradas_grandes === "0" && rectangulares === "0" && redondas === "0" && cuadradas_chicas === "0"){
            alert('No eligió ninguna maceta');
            return false;
        }
        console.log(conicas);

    }
}


// Registrar venta
function validar_venta (){

    let cliente, select_maceta;

    cliente = document.getElementById('cliente_venta').value ;
    select_maceta =  document.getElementById('maceta_venta').value ;
    
    if (isNaN(cliente)){
        alert("Elija un cliente");
        return false;
    }else{
        if(isNaN(select_maceta)){
            alert("Elija una maceta");
            return false;
        }

    }
}