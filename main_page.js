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

//   RETIRAR 
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


//  ANULAR

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
