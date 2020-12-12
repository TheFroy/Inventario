const set_ret_modal = (id) =>{
    var _id = id
    document.getElementById('id_retirar').value = _id
    var cantidad = document.getElementById('cant'+id).textContent 
    document.getElementById('cant_total').value = cantidad
}

document.querySelectorAll('.ret').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        set_ret_modal(event.target.id)
    })
  })