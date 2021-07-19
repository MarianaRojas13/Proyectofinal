//Este archivo permite la comunicacion con el controlador
//llama a las funciones del controlador
//getDatosProductos
const getDatosProductos = async()=>{
    let resp= await axios.get("api/datosproductos/get");
    return resp.data;
}
//crearProductos
const crearProductos =async(producto)=>{
    let resp =await axios.post("api/productos/post",producto,{
        //estructura de peticiones post, siempre va
        headers:{
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};
