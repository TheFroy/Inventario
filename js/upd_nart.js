const set_upd_nart = (id) => {
    var _id = id
    var nombre = document.getElementById('nom'+id).textContent 
    var marca = document.getElementById('marca'+id).textContent 
    var modelo = document.getElementById('modelo'+id).textContent 
    var desc = document.getElementById('desc'+id).textContent 
    var cant = document.getElementById('cant'+id).textContent 
    var precio = document.getElementById('precio'+id).textContent 
    var oficina = document.getElementById('ofi'+id).textContent 
 
    document.getElementById('upd_id_nart').value = _id
    document.getElementById('upd_nom_nart').value = nombre
    document.getElementById('upd_marca_nart').value = marca
    document.getElementById('upd_modelo_nart').value = modelo
    document.getElementById('upd_desc_nart').value = desc
    document.getElementById('upd_cant_nart').value = cant
    document.getElementById('upd_precio_nart').value = precio
    document.getElementById('upd_ofi_nart').value = oficina
 }
 
 document.querySelectorAll('.info-nart').forEach(item => { //Le asiga la funcion setForms a todos los elementos con la clase .pedir
     item.addEventListener('click', event => {
         set_upd_nart(event.target.id)
     })
   })