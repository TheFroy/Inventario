$(document).ready(function (){
    $('modal_editar').on('show.bs.modal', function(e){
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type: 'POST',
            url: '../api/fetch_articulo.php',
            data: 'rowid=' + rowid,
            success: function(data){
                $('.fetched-data').html(data);
            }
        })
    })
})
    
