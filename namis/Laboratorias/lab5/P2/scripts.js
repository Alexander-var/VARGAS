
// Funciones
    document.getElementById('boton').addEventListener('click', function(){
        mes = document.getElementById('mes').value;
        anio = document.getElementById('anio').value;
        validarCampos(anio);
        
    })
    
    function validarCampos(anio){
        if(anio === ""){
            alert("Indroduzca un Año")
        }else{
            traemosDatos(mes, anio);
        }
    }

    function traemosDatos(mes, anio){
    fetch('calendario.php?mes=0'+mes+'&anio='+anio)
    .then(response => response.text())
    .then(function(data) {
        document.getElementById('caja').innerHTML=data;

    });

    
}