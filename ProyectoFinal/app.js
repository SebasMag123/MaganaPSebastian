

document.getElementById('btnConsultar').addEventListener('click', async () => {
//    debugger
    let datosFormulario = new FormData(document.getElementById("formulario"));
    let respuesta = await fetch("query.php", {
        method: "POST",
        body: datosFormulario,
    });
    const data = await respuesta.json()
    console.log(data)
    // console.log(data[0])
    document.getElementById('Nombre').value = data.Id_Nombre
    document.getElementById('Fabricante').value = data.Fabricante
    document.getElementById('TipoAvion').value = data.TipoAvion
    document.getElementById('PrimerVuelo').value = data.PrimerVuelo
    document.getElementById('Intro').value = data.Introduccion
    document.getElementById('NumCons').value = data.NumConstruidos
    document.getElementById('CostoPrograma').value = data.CostoProg
    document.getElementById('CostoUnit').value = data.CostoUnit
    document.getElementById('CostoHora').value = data.CostoHora
})