window.onload=function(){
    document.getElementById("btnAjax").addEventListener("click",pedirHeader);
    document.getElementById("btnReset").addEventListener("click",iniciarHeader);

    function pedirHeader(){
        var solicitud = new XMLHttpRequest();

        solicitud.onreadystatechange=function(){
            if(solicitud.readyState==4&&solicitud.status==200){
                document.getElementById("Caja1").innerHTML=solicitud.responseText;               
            }};
        solicitud.open("GET","CargarArchivo.txt",true);
        solicitud.send();
    }
    function iniciarHeader(){
        document.getElementById("Caja1").innerHTML="Este es un header";
    }
}