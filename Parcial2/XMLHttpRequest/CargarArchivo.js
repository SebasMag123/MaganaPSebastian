window.onload=function(){
    document.getElementById("caja2").addEventListener("click",pedirHeader);
    document.getElementById("caja3").addEventListener("click",iniciarHeader);

    function pedirHeader(){
        var solicitud = new XMLHttpRequest();

        solicitud.onreadystatechange=function(){
            if(solicitud.readyState==4&&solicitud.status==200){
                document.getElementById("caja1").innerHTML=solicitud.responseText;               
            }};
        solicitud.open("GET","CargarArchivo.txt",true);
        solicitud.send();
    }
    function iniciarHeader(){
        document.getElementById("caja1").innerHTML="Encabezado";
    }
}