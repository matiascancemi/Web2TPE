"use strict";

function cargarPagina(){

  let transaccion = document.querySelector('#transaccion');
  let id_transaccion = transaccion.dataset.tns_id;
  let urlderest = 'http://localhost/cajeros_airtm/api/comentarios/transaccion/' + id_transaccion;
  let urldecomentario = 'http://localhost/cajeros_airtm/api/comentarios/';
    
    function VerComentarios(){
        fetch(urlderest, {
          method: "GET",
          mode: 'cors',
        }).then(function(r){
          if(!r.ok){
            console.log("Muestro Error")
          }
          return r.json()
        })
        .then(function(json) {
            listadecomentarios(json);
        })
        .catch(function(e){
          console.log(e)
        })
  }

  
  function listadecomentarios(json){
    let ul = document.querySelector(".comentarios");
    ul.innerHTML = "";
    for (let i = 0; i < Object.keys(json).length; i++) {
          let keys = Object.keys(json);
          let comentario = keys[i];
          //console.log(json[comentario]);
          let comentario_unico = json[comentario];
          let item = document.createElement("li");
          let h4 = document.createElement("h4");
          let nombre =  document.createTextNode(comentario_unico.usuario);
          h4.appendChild(nombre);
          item.appendChild(h4); 
          let h3 = document.createElement("h3");
          let valor = 'valor star' + comentario_unico.valoracion;
          h3.setAttribute('class', valor);
          item.appendChild(h3);           
          let span = document.createElement("span");
          let comentario_desc =  document.createTextNode(comentario_unico.comentario);
          span.appendChild(comentario_desc);
          item.appendChild(span);
          let body = document.querySelector('body');
            if (body.dataset.rol == 0){
              let borrar = document.createElement("button");
              borrar.setAttribute("id", "tns_" + comentario_unico.id);
              borrar.innerText = 'Borrar';
              item.appendChild(borrar);
            }          
          ul.appendChild(item);   
            if (body.dataset.rol == 0){
            document.querySelector("#tns_" + comentario_unico.id).addEventListener("click", () => {eliminar_comentario(comentario_unico.id)}); 
            }

    }   
  }

  VerComentarios();

  //////// ELIMINAR COMENTARIO

  function eliminar_comentario(id){
    fetch(urldecomentario + id,
      {
        "method": "DELETE",
        "headers": { "Content-Type": "application/json" }
    })
    .then(function(response){
      if( ! response.ok ){
          console.log("Muestro Error")
      } else {
        return response.json();
      }
    })
    .then(function(j){
      VerComentarios();
    })
    .catch(function(error){
        console.log(error);
    })
      
  }

  function agregar_comentario(){
    event.preventDefault();
    let comentario_desc = document.getElementById("comentario").value;
    let calificacion = document.getElementById("calificacion").value;
    
    if ((comentario_desc==="")||(calificacion==="")){
        console.log("No completó los campos");
    }else{
        let body = document.querySelector('body');
        let usuario_id = body.dataset.user_id;
        let enviar_comentario = {
                "id": "",
                "id_tns": id_transaccion,
                "id_usuario": usuario_id,
                "comentario": comentario_desc,
                "valoracion": calificacion
          };

         fetch(urldecomentario, {
            "method": "POST",
            "headers": { "Content-Type": "application/json" },
            "body": JSON.stringify(enviar_comentario)
         }).then(function(r){
            if(!r.ok){
              console.log(r)
            }
            return r.json()
          })
          .then(function(){
            VerComentarios();
          })
          .catch(function(e){
            console.log(e)
          }) 
        }
}

document.getElementById("agregar-comment").addEventListener("click", agregar_comentario);

}

document.addEventListener("DOMContentLoaded", cargarPagina);