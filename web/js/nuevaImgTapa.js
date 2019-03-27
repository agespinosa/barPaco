var tiposValidos= [ 'image/jpeg', 'image/png', 'image/jpg'];

function validaTiposImg(file){
    for(var i=0; i<tiposValidos.length; i++){
        if(file.type=== tiposValidos[i]){
            return true;
        }
    }
    return false;
}

function onChange(event){
    var file= event.target.files[0];
    if(validaTiposImg(file)){
        var tipoMiniatura= document.getElementById('tapaThumb');
        tipoMiniatura.src= window.URL.createObjectURL(file);
    }else{
        alert('No es Valido');
    }
    
  }