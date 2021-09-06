$(document).ready(function() {


    $('#busqueda').submit(function() {

        var baseurl = window.location.origin;

        $.ajax({
            type: 'GET',
            url: baseurl+'/pulso/public/listarPropiedades',
            data: $(this).serialize(),
            success: function(data) {
                $('#prop').empty();
                $('#prop').append(data);   
            }
        });
        
        return false;
    });

    var baseurl = window.location.origin;
    url = baseurl+"/pulso/public/listarPropiedades";
    var $container = $("#prop");
    $container.load(url); 

    $('#propiedades').DataTable();
    
});