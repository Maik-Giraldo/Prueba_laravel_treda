const nombre = $("#nombre");
const fecha = $("#fecha");
const btnContinuar = $("#btn-continuar");
const tableStore = $("#table-store")

let list_stores = [];
let accion = "agregar";
let id_editar = "";

const getStore = async()=>{
    const stores = fetch('/tiendas/get', {
        headers: {
            'Content-Type':  'application/json'
        },
    });

   await stores.then((res)=>res.json()).then((response)=>{
        list_stores = response.stores;
        return response;
    });

    let infoStores = "";
    list_stores.forEach(store=>{
        infoStores += ` <tr>
                                    <th scope="row">${store.id}</th>
                                    <td>${store.nombre}</td>
                                    <td>${store.fecha_apertura}</td>
                                    <td>
                                        <i class="material-icons" onclick= "editar_rellenar(${store.id})">edit</i>
                                        <i class="material-icons" onclick="eliminar(${store.id})">delete</i>                     
                                    </td>
                                </tr>`
    });

    tableStore.html(infoStores);
};

const eliminar = async (id)=>{
    const result = fetch('/tiendas', {
        headers: {
            'Content-Type':  'application/json'
        },
        body: JSON.stringify({
            'id': id
        }),
        method: 'DELETE'
    });

    await result.then((res)=>res.json()).then(async(response)=>{
        await getStore();
    });
};

const agregar = async ()=>{
    if(nombre.val().trim() == "" || fecha.val() == ""){
        alert("Rellene todos los campos")
        return;
    };

    const result = fetch('/tiendas', {
        headers: {
            'Content-Type':  'application/json'
        },
        body: JSON.stringify({
            nombre : nombre.val(),
            fecha_apertura : fecha.val()
        }),
        method: 'POST'
    });

    await result.then((res)=>res.json()).then(async(response)=>{
        nombre.val("");
        fecha.val("");
        await getStore();
    });
};

const editar = async (id)=>{
    if(nombre.val().trim() == "" || fecha.val() == ""){
        alert("Rellene todos los campos")
        return;
    };

    const result = fetch('/tiendas', {
        headers: {
            'Content-Type':  'application/json'
        },
        body: JSON.stringify({
            nombre : nombre.val(),
            fecha_apertura : fecha.val(),
            id: id_editar
        }),
        method: 'PUT'
    });

    await result.then((res)=>res.json()).then(async(response)=>{
        nombre.val("");
        fecha.val("");
        accion = "agregar";
        await getStore();
    });
};

const editar_rellenar = (id)=>{
    const store = list_stores.filter(e=>e.id == id)[0];
    nombre.val(store.nombre);
    fecha.val(store.fecha_apertura);

    accion = "editar";
    id_editar = id;
}

btnContinuar.on("click", ()=>{
    switch(accion){
        case "agregar": 
            agregar();
            break;

        case "editar":
            editar(id_editar);
            break;

        default:
            break;
    }
})

$(document).ready(async()=>{
    await getStore();
});


