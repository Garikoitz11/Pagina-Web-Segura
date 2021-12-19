function validarTexto(parametro){
    var patron = /^[a-zA-Z0-9\s]{1,20}$/;
    if(parametro.search(patron)){
        return false;
    } else{
        return true;
    }
}

function validarDeskribapena(parametro){
    var patron = /^[a-zA-ZÀ-ÿ\s]{1,250}$/;
    if(parametro.search(patron)){
        return false;
    } else{
        return true;
    }
}

function validarPrezioa(parametro){
    var patron = /^[0-9]+([.])?([0-9]+)?$/;
    if(parametro.search(patron)){
        return false;
    } else{
        return true;
    }
}


function validarTxertatu(){
    //alert("todo en orden");

    var formulario = document.addForm;

    if(formulario.izena.value == ""){
        //alert("Mesedez sartu produktuaren izena");
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktuaren izena</div>`;
        formulario.izena.focus();
        return false;
    } else if(validarTexto(formulario.izena.value) == false){
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktuaren izena ondo.</div>`;
        formulario.izena.value = "";
        formulario.izena.focus();
        return false;
    }
    else{
        document.getElementById("alerta").innerHTML = "";
    }
    
    if(formulario.mota.value == ""){
        //alert("Mesedez sartu produktu mota");
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktu mota</div>`;
        formulario.mota.focus();
        return false;
    } else if(validarTexto(formulario.mota.value) == false){
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktu mota ondo.</div>`;
        formulario.mota.value = "";
        formulario.mota.focus();
        return false;
    }
    else{
        document.getElementById("alerta").innerHTML = "";
    }
    
    if(formulario.deskribapena.value == ""){
        //alert("Mesedez sartu produktuaren deskribapena");
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktuaren deskribapena</div>`;
        formulario.deskribapena.focus();
        return false;
    } else if(validarDeskribapena(formulario.deskribapena.value) == false){
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktuaren deskribapena ondo.</div>`;
        formulario.deskribapena.value = "";
        formulario.deskribapena.focus();
        return false;
    }
    else{
        document.getElementById("alerta").innerHTML = "";
    }

    if(formulario.prezio.value == ""){
        //alert("Mesedez sartu produktuaren prezioa");
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktuaren prezioa</div>`;
        formulario.prezio.focus();
        return false;
    } else if(validarPrezioa(formulario.prezio.value) == false){
        document.getElementById("alerta").innerHTML = `<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez sartu produktuaren prezioa ondo (Ez ditu komarik onartzen).</div>`;
        formulario.prezio.value = "";
        formulario.prezio.focus();
        return false;
    }
    else{
        document.getElementById("alerta").innerHTML = "";
    }

    formulario.submit();
}