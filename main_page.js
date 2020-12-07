// UPD CODE
const set_upd_modal = (id) => {
   var _id = id
   var nombre = document.getElementById('nombre'+id).textContent 
   var color = document.getElementById('color'+id).textContent 
   var talla = document.getElementById('talla'+id).textContent 
   var material = document.getElementById('material'+id).textContent 
   var cantidad = document.getElementById('cant'+id).textContent 
   var nota = document.getElementById('nota'+id).textContent 

   document.getElementById('id_modal').value = _id
   document.getElementById('nombre_modal').value = nombre
   document.getElementById('color_modal').value = color
   document.getElementById('talla_forma_modal').value = talla
   document.getElementById('material_modal').value = material
   document.getElementById('cantidad_modal').value = cantidad
   document.getElementById('nota_modal').value = nota
}

document.querySelectorAll('.upd').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        set_upd_modal(event.target.id)
    })
  })
//  -----------------------------------

// DELETE code

const set_del_modal = (id) =>{
    var _id = id
    document.getElementById('id_delete').value = _id
}

document.querySelectorAll('.del').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        set_del_modal(event.target.id)
    })
  })
// ------------------------

const set_ret_modal = (id) =>{
    var _id = id
    document.getElementById('id_retirar').value = _id
}

document.querySelectorAll('.ret').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
    item.addEventListener('click', event => {
        set_ret_modal(event.target.id)
    })
  })

//   RETIRAR 
