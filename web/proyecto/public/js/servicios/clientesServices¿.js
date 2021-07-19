//obtiene los datos ,todos los datos de los clientes
const getClientes = async()=>{
    let resp= await axios.get("api/clientes/get");
    return resp.data;
}

//llama ala funcion de crear clientes que esta en el controller
const crearClientes =async(cliente)=>{
    let resp =await axios.post("api/clientes/post",cliente,{
        //estructura de peticiones post, siempre va
        headers:{
            'Content-Type': 'application/json'
        }
    });
    return resp.data;
};