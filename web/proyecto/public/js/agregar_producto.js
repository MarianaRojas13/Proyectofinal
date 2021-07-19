const cargarProductos =async()=>{
    let resultado=await axios.get("api/productos/get");/*busca los productos*/
    let producto= resultado.data;/*guarda los productos */
    let tipoSelect=document.querySelector("#tipo-select");/*obtiene el select */
    
    producto.forEach(m=> {/*se recorren */
        let option=document.createElement("option");/*se crean las opciones y se guardan en el select */
        option.innerText=m;
        tipoSelect.appendChild(option);
    });
};
cargarProductos();
