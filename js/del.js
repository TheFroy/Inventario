const set_del_modal = (id) =>{
    var _id = id
    document.getElementById('id_delete').value = _id
}

document.querySelectorAll('.del').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        set_del_modal(event.target.id)
    })
  })