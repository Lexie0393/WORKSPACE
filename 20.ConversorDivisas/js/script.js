

function convertirMoneda() {
    
    var origen = document.querySelector("#origen").value;
    var cantidad = Number(document.querySelector("#cantidad").value);
    var destino = document.querySelector("#destino").value;
    var resultado = 0;
    
    if (origen == "euros" && destino == "dolares") {
       resultado = cantidad * 1.177;
    } else if (origen == "euros" && destino == "libras") {
        resultado = cantidad * 0.859;
    } else if (origen == "euros" && destino == "pesetas"){
        resultado = cantidad *166.386;
    } else if (origen == "euros" && destino == "euros") {
        resultado = cantidad
    }
    document.querySelector("#resultado").value = resultado.toFixed(2);


    if (origen == "dolares" && destino == "libras") {
       resultado = cantidad * 0.729;
    } else if (origen == "dolares" && destino == "euros") {
        resultado = cantidad * 0.849;
    } else if (origen == "dolares" && destino == "pesetas"){
        resultado = cantidad *141.259;
    }else if (origen == "dolares" && destino == "dolares") {
        resultado = cantidad
    }
    document.querySelector("#resultado").value = resultado.toFixed(2);


    if (origen == "libras" && destino == "dolares") {
       resultado = cantidad * 1.163;
    } else if (origen == "libras" && destino == "euros") {
        resultado = cantidad * 1.163;
    } else if (origen == "libras" && destino == "pesetas"){
        resultado = cantidad * 193.539;
    } else if (origen == "libras" && destino == "libras") {
        resultado = cantidad
    }
    document.querySelector("#resultado").value = resultado.toFixed(2);


    if (origen == "pesetas" && destino == "dolares") {
       resultado = cantidad * 0.00708;
    } else if (origen == "pesetas" && destino == "euros") {
        resultado = cantidad * 0.00601;
    } else if (origen == "pesetas" && destino == "libras"){
        resultado = cantidad * 0.00517;
    } else if (origen == "pesetas" && destino == "pesetas") {
        resultado = cantidad
    } 
    document.querySelector("#resultado").value = resultado.toFixed(2);
}
// conssole.log(origen);
// conole.log(cantidad);
// console.log(destino);
// console.log(resultado);
// 