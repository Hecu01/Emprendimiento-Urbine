// Search client page clientes.php/html
$(document).ready(function(){
    console.log('Hello World!');

    $('#search').keyup(function(e){
        let search =$('#search').val();
        $.ajax({
            url: '../php/tabla_clientes/busq-clientes.php',
            type: 'POST',
            data: { search },
            success: function(response){
                console.log(response);

            }
        })
    })

});