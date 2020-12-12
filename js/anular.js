const anular_retiro = (id) =>{
    var cantidad = document.getElementById('cantidad_retiro'+id).textContent 
    var id_art_retiro = document.getElementById('id_articulo_retiro'+id).textContent 
    var cant_retiro = document.getElementById('cant_anular'+id).textContent 

    document.getElementById('id_anular').value = id
    document.getElementById('id_anular_art').value = id_art_retiro
    document.getElementById('cant_anular').value = cantidad
    document.getElementById('cant_total_anular').value = cant_retiro
}

document.querySelectorAll('.anular').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        anular_retiro(event.target.id)
    })
  })