const set_del_user = (id) =>{
    var _id = id
    document.getElementById('id_delete_user').value = _id
}

document.querySelectorAll('.del_user').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        set_del_user(event.target.id)
    })
  })