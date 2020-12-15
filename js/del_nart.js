const set_del_nart = (id) =>{
    var _id = id
    document.getElementById('id_delete_nart').value = _id
}

document.querySelectorAll('.del_nart').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        set_del_nart(event.target.id)
    })
  })