const set_upd_user = (id) => {
    var _id = id
    var user = document.getElementById('user'+id).textContent 
    // var pwd = document.getElementById('pwd'+id).textContent 
    var rol = document.getElementById('rol'+id).textContent 
 
    document.getElementById('id_user').value = _id
    document.getElementById('upd_username').value = user
    // document.getElementById('upd_pwd').value = pwd
    document.getElementById('upd_rol').value = rol

 }
 
 document.querySelectorAll('.upd_user').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
     item.addEventListener('click', event => {
         set_upd_user(event.target.id)
     })
   })