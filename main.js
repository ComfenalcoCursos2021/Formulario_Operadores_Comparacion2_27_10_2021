addEventListener("DOMContentLoaded", async()=>{
    let data = {
        numero1: 80,
        numero2: '99'
    };
    let peticio = await fetch("https://pruebacofenalco.000webhostapp.com/Formulario_Operadores_Comparacion2_27_10_2021/api.php", {method: "POST", body: JSON.stringify(data)});
    let json = await peticio.text();
    console.log(json);
    alert(json);
    // document.body.insertAdjacentText("beforeend", json);

})