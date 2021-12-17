//Funcion para usuario
function validarTexto(parametro){
    var patron = /^[a-zA-Z0-9\_\-]{4,16}$/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}

//Funcion para nombre
function validarNombre(parametro){
    var patron = /^[a-zA-ZÀ-ÿ\s]{1,20}$/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}
//Funcion para apellido
function validarAbizena(parametro){
    var patron = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}
//Funcion para codigo postal
function validarCodigoPostal(parametro){
    var patron = /(([1-4][0-9][0-9][0-9][0-9])|(0(?=[1-9][0-9][0-9][0-9]))|(5(?=[0-2][0-9][0-9][0-9])))/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}
//Funcion para NAN
function validarNAN(dni) {
    var numero, let, letra;
    var expresion_regular_dni = /^[XYZ]?\d{5,8}[A-Z]$/;

    dni = dni.toUpperCase();

    if(expresion_regular_dni.test(dni) === true){
        numero = dni.substr(0,dni.length-1);
        numero = numero.replace('X', 0);
        numero = numero.replace('Y', 1);
        numero = numero.replace('Z', 2);
        let = dni.substr(dni.length-1, 1);
        numero = numero % 23;
        letra = 'TRWAGMYFPDXBNJZSQVHLCKET';
        letra = letra.substring(numero, numero+1);
        if (letra != let) {
            return false;
        }else{
            return true;
        }
    }else{
        return false;
    }
}
//Funcion para JaiotzaData
function validarJaiotzaData(parametro){
    var patron = /^(19[3456789]\d|20[01]\d)-\d{2}-\d{2}$/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}
//Funcion para correo
function validarCorreo(parametro){
    var patron = /^\w+([\.-]?\w+)*@(hotmail|outlook|yahoo|live|gmail|ikasle.ehu|ehu)*.(com|es|eus)+$/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}

//Funcion para mugikorra
function validarMugikorra(parametro){
    var patron = /^\d{9}$/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}

//Funcion para pasahitza
function validarPasahitza(parametro){
    var patron= /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&.-~<>;:#¿¡_])[A-Za-z\d$@$!%*?&.-~<>;:#¿¡_]{8,15}/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}

//Funcion para datuBankarioak
function validarDatuBankarioak(parametro){
    var patron= /^([a-zA-Z]{2})\s*\t*(\d{2})\s*\t*(\d{4})\s*\t*(\d{4})\s*\t*(\d{2})\s*\t*(\d{10})/;
    if(parametro.search(patron)){
        return false;
    }else{
        return true;
    }
}

function validarFormulario(){
   
   var formulario = document.addForm; 

   if(formulario.usuario.value == ""){
       document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, erabiltzailea sartu.</div>';
       formulario.usuario.focus();
       return false;
   } else if(validarTexto(formulario.usuario.value)== false){
    document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, erabiltzailea ondo sartu.</div>';
    formulario.usuario.value = "";
    formulario.usuario.focus();
    return false;
   }
   else{
       document.getElementById("alerta").innerHTML = "";
   }

   if(formulario.nombre.value == ""){
    document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, izena sartu.</div>';
    formulario.nombre.focus();
    return false;
    }else if(validarNombre(formulario.nombre.value)== false){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, izena ondo sartu.</div>';
        formulario.nombre.value = "";
        formulario.nombre.focus();
        return false;
    }
    else{
    document.getElementById("alerta").innerHTML = "";
    }

    if(formulario.abizena.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, abizena sartu.</div>';
        formulario.abizena.focus();
        return false;
        } else if(validarAbizena(formulario.abizena.value)== false){
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, abizena ondo sartu.</div>';
            formulario.abizena.value = "";
            formulario.abizena.focus();
            return false;
        }
        else{
        document.getElementById("alerta").innerHTML = "";
        }

    if(formulario.codigoPostal.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, posta-kodea sartu.</div>';
        formulario.codigoPostal.focus();
        return false;
        } else if(validarCodigoPostal(formulario.codigoPostal.value)== false){
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, posta-kodea ondo sartu.</div>';
            formulario.codigoPostal.value = "";
            formulario.codigoPostal.focus();
            return false;
        }
        else{
        document.getElementById("alerta").innerHTML = "";
        }

    if(formulario.NAN.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, NAN-a sartu.</div>';
        formulario.NAN.focus();
        return false;
        } else if(validarNAN(formulario.NAN.value)== false){
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, NAN-a ondo sartu.</div>';
            formulario.NAN.value = "";
            formulario.NAN.focus();
            return false;
        }
        else{
        document.getElementById("alerta").innerHTML = "";
        }

    if(formulario.JaiotzaData.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, jaiotza data sartu.</div>';
        formulario.JaiotzaData.focus();
        return false;
        } else if(validarJaiotzaData(formulario.JaiotzaData.value)== false){
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, jaiotza data ondo sartu.</div>';
            formulario.JaiotzaData.value = "";
            formulario.JaiotzaData.focus();
            return false;
        }
        else{
        document.getElementById("alerta").innerHTML = "";
        }

    if(formulario.password.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, pasahitza sartu.</div>';
        formulario.password.focus();
        return false;
    }else if(validarPasahitza(formulario.password.value)== false){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, sartu pasahitz bat 8 digiturekin edo gehiago eta maiuskula, minuskula, zenbaki eta karakter arraro batekin.</div>';
        formulario.password.value = "";
        formulario.password.focus();
        return false;
    }
    else{
    document.getElementById("alerta").innerHTML = "";
    }
    
    if(formulario.password.value != formulario.password2.value){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Pasahitzak desberdinak dira</div>';
        formulario.password.focus();
        formulario.password2.value ="";
        formulario.password.value = "";
        return false;
    } else {
        document.getElementById("alerta").innerHTML = "";
    }
    if(formulario.correo.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, posta-elektronikoa sartu.</div>';
        formulario.correo.focus();
        return false;
        }  else if(validarCorreo(formulario.correo.value)== false){
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a>Mesedez, posta-elektronikoa ondo sartu.</div>';
            formulario.correo.value = "";
            formulario.correo.focus();
            return false;
        }
        else{
        document.getElementById("alerta").innerHTML = "";
        }
    
    if(formulario.telefono.value == ""){
        document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, mugikorra sartu.</div>';
        formulario.telefono.focus();
        return false;
        } else if(validarMugikorra(formulario.telefono.value)== false){
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, mugikorra ondo sartu.</div>';
            formulario.telefono.value = "";
            formulario.telefono.focus();
            return false;
        }
        else{
        document.getElementById("alerta").innerHTML = "";
        }

        if(formulario.datosBancarios.value == ""){
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, datu Bankarioak sartu.</div>';
            formulario.datosBancarios.focus();
            return false;
            } else if(validarDatuBankarioak(formulario.datosBancarios.value)== false){
                document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, datu bankarioak ondo sartu.</div>';
                formulario.datosBancarios.value = "";
                formulario.datosBancarios.focus();
                return false;
            }
            else{
            document.getElementById("alerta").innerHTML = "";
            }
    
       // Baldintzak
        elemento = document.getElementById("terminos");
        if( !elemento.checked ) {
            document.getElementById("alerta").innerHTML = '<div class="alert alert-danger"><a href="" class="close" data-dismiss="alert">&times;</a> Mesedez, baldintzak onartu .</div>';
            return false;
        }

   formulario.submit();
}