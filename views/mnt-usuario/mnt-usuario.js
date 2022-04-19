$(document).ready( function () {
    $('#usuarios_data')
    .DataTable({
        "aProcessing": true,
        "aServerSide": true,
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'],
        "ajax": {
                    url:"../../controller/ctrl_usuario.php?op=listar",
                    type: "post"
                },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "order": [[ 0, "asc" ]],
        "language": {
                        "sProcessing":     "Procesando...",
                        "sLengthMenu":     "Mostrar _MENU_ registros",
                        "sZeroRecords":    "No se encontraron resultados",
                        "sEmptyTable":     "Ningún dato disponible en esta tabla",
                        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix":    "",
                        "sSearch":         "Buscar:",
                        "sUrl":            "",
                        "sInfoThousands":  ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate":{
                                        "sFirst":    "Primero",
                                        "sLast":     "Último",
                                        "sNext":     "Siguiente",
                                        "sPrevious": "Anterior"
                                    },
                        "oAria":{
                                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                }
                    }
});

} );

function eliminar(usr_id)
{
    console.log(usr_id);
    Swal.fire({
                title: 'Eliminar Usuario',
                text: "Estas Seguro de Eliminar el Usuario?",
                icon: 'error',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'No',
                confirmButtonText: 'Si'
        }).then((result) => {
                if (result.isConfirmed) 
                {   
                    $.post("../../controller/ctrl_usuario.php?op=eliminar", {usr_id:usr_id},
                        function(data){} //funcion por defecto
                        );
                    
                        $('#usuarios_data').DataTable().ajax.reload();

                    //Disparador de el Success de operacion eliminar
                    Swal.fire(
                        'Eliminado!',
                        'El usuario ha sido eliminado.',
                        'success'
                        )
                }
        })

    
}