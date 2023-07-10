AOS.init({duration: 1000});
jQuery.datetimepicker.setLocale('es');

let horas = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];
let fechaG = "";

    $(document).ready(function(){
        if($("#fecha").length){
            var fecha = new Date();
            var anio = fecha.getFullYear();
            var dia = fecha.getDate();
            var _mes = fecha.getMonth();//viene con valores de 0 al 11
            _mes = _mes + 1;//ahora lo tienes de 1 al 12
            if (_mes < 10)//ahora le agregas un 0 para el formato date
            { var mes = "0" + _mes;}
            else
            { var mes = _mes.toString;}
            document.getElementById("fecha").min = anio+'-'+mes+'-'+dia;
            $('#fecha').datetimepicker({
                timepicker:false,
                format:'Y-m-d',
                minDate: anio+'/'+mes+'/'+dia,
                onChangeDateTime:function(dp,$input){
                    if($input.val()!=""){
                        cargarHorario();
                    }
                }
            });
        }
        
        $("#tipoPago1").hide();
        $("#tipoPago2").hide();
        $("#tipoPago3").hide();
    });

function apartar(id){    
    if(horas[id-1]==1){
        horas[id-1] = 0;
    }else{
        horas[id-1] = 1;
    }        

    var posicionI="";
    for(var i=0; i<horas.length; i++){
        if(horas[i]==1){
            posicionI=i;
            break;
        }else{
            posicionI="";
        }
    }

    var posicionF="";
    for(var i=horas.length-1; i>=0; i--){
        if(horas[i]==1){
            posicionF=i;
            break;
        }else{
            posicionF="";
        }
    }

    //Para autorelleno
    var banderaError = false;
    for(var i=posicionI; i<=posicionF; i++){
        if(horas[i]==3){
            banderaError=true;
        }
    }
    if(!banderaError){
        for(var i=posicionI; i<=posicionF; i++){
            horas[i]=1;
        }
        for(var i=0; i<horas.length; i++){
            if(horas[i]==1){            
                document.querySelector('#btn'+(i+1)).classList.remove('btn-secondary');
                document.querySelector('#btn'+(i+1)).classList.add('btn-info');
            }else{
                document.querySelector('#btn'+(i+1)).classList.add('btn-secondary');
                document.querySelector('#btn'+(i+1)).classList.remove('btn-info');
            }
        }
    
        //Para input hora inicio
        switch (posicionI){
            case 0:
                document.querySelector("#hora").value = "14:00"
                break;
            case 1:
                document.querySelector("#hora").value = "14:30"
                break;
            case 2:
                document.querySelector("#hora").value = "15:00"
                break;
            case 3:
                document.querySelector("#hora").value = "15:30"
                break;
            case 4:
                document.querySelector("#hora").value = "16:00"
                break;
            case 5:
                document.querySelector("#hora").value = "16:30"
                break;
            case 6:
                document.querySelector("#hora").value = "17:00"
                break;
            case 7:
                document.querySelector("#hora").value = "17:30"
                break;
            case 8:
                document.querySelector("#hora").value = "18:00"
                break;
            case 9:
                document.querySelector("#hora").value = "18:30"
                break;
            case 10:
                document.querySelector("#hora").value = "19:00"
                break;
            case 11:
                document.querySelector("#hora").value = "19:30"
                break;
            case 12:
                document.querySelector("#hora").value = "20:00"
                break;
            case 13:
                document.querySelector("#hora").value = "20:30"
                break;
        }
        //Para input hora Final
        switch (posicionF){        
            case 0:
                document.querySelector("#hora2").value = "14:30"
                break;
            case 1:
                document.querySelector("#hora2").value = "15:00"
                break;
            case 2:
                document.querySelector("#hora2").value = "15:30"
                break;
            case 3:
                document.querySelector("#hora2").value = "16:00"
                break;
            case 4:
                document.querySelector("#hora2").value = "16:30"
                break;
            case 5:
                document.querySelector("#hora2").value = "17:00"
                break;
            case 6:
                document.querySelector("#hora2").value = "17:30"
                break;
            case 7:
                document.querySelector("#hora2").value = "18:00"
                break;
            case 8:
                document.querySelector("#hora2").value = "18:30"
                break;
            case 9:
                document.querySelector("#hora2").value = "19:00"
                break;
            case 10:
                document.querySelector("#hora2").value = "19:30"
                break;
            case 11:
                document.querySelector("#hora2").value = "20:00"
                break;
            case 12:
                document.querySelector("#hora2").value = "20:30"
                break;
            case 13:
                document.querySelector("#hora2").value = "21:00"
                break;
        }
    }else{
        swal({
            icon: "warning",
            title: "Atención",
            text: "!No se puede reservar en medio de un horario ocupado!, le recomendamos hacer reservas individuales",
        });
        /* alert("!No se puede reservar en medio de un horario ocupado!, le recomendamos hacer reservas individuales") */
        horas[posicionF]=0;
    }
}

function reset(){
    $('#formReserva').trigger("reset");
    for(var i=0; i<horas.length; i++){
        horas[i]=0;
    }
    $("#tipoPago1").hide();
    $("#tipoPago2").hide();
    $("#tipoPago3").hide();
    $('#formTarjeta').trigger("reset");
    resetearButtons();
}

function abrirModoPago(){

    var form = document.getElementById('formReserva');

    if (!form.checkValidity()) {
        swal({
            icon: "warning",
            title: "Atención",
            text: "Completa los campos para continuar, revisa si el correo introducido es un correo válido",
        });
        /* alert("Completa los campos para continuar, revisa si el correo introducido es un correo válido") */
    }else{
        var myModalEl = document.getElementById('modalId');
        var modal = bootstrap.Modal.getInstance(myModalEl)
        modal.hide();
        
        var myModal = new bootstrap.Modal(document.getElementById('modalPago'))
        myModal.show()
    }    
}

function cardName(){
    var texto = document.getElementById('nombreTarjeta').value;
    document.getElementById('cardName').textContent=texto;
}

function cardNumber(){
    var texto = document.getElementById('numeroTarjeta').value;
    document.getElementById('cardNumber').textContent=texto;
}

function regresar(){
    var myModalEl = document.getElementById('modalPago');
    var modal = bootstrap.Modal.getInstance(myModalEl)
    modal.hide();
    
    var myModal = new bootstrap.Modal(document.getElementById('modalId'))
    myModal.show()
}

function mostrarPago(){
    if($('#tipoPago').val()==1){
        $('#tipoPago1').fadeIn(500);
        $('#tipoPago2').hide(500);
        $('#tipoPago3').hide(500);
    }else if($('#tipoPago').val()==2){
        $('#tipoPago1').hide(500);
        $('#tipoPago2').fadeIn(500);
        $('#tipoPago3').hide(500);
    }else if($('#tipoPago').val()==3){
        $('#tipoPago1').hide(500);
        $('#tipoPago2').hide(500);
        $('#tipoPago3').fadeIn(500);
    }
}

function guardarReserva(){
    var form = document.getElementById('formTarjeta');
    if($("#tipoPago").val()==1){
        if (!form.checkValidity()) {
            swal({
                icon: "warning",
                title: "Atención",
                text: "Complete los campos por favor",
            })
        }else{
            /* **************** AQUÍ DEBE IR LA TRANSACCIÓN DE LA TARJETA********** */

            /* **************** AQUÍ DEBE IR LA TRANSACCIÓN DE LA TARJETA********** */
            var formData = new FormData();
            formData.append('nombre', document.getElementById("nombre").value);
            formData.append('dpi', document.getElementById("dpi").value);
            formData.append('telefono', document.getElementById("telefono").value);
            formData.append('email', document.getElementById("email").value);
            formData.append('nit', document.getElementById("nit").value);
            formData.append('fecha', document.getElementById("fecha").value);
            formData.append('h_inicio', document.getElementById("hora").value);
            formData.append('h_terminar', document.getElementById("hora2").value);
            formData.append('tipo_pago', 1);
            formData.append('estado', 1);
            axios({
                url: "/guardarReserva",
                method: "post",
                data: formData
            }).then((res) =>{
                console.log(res.data);                           
                swal({
                    icon: "success",
                    title: "Atención",
                    text: "¡Se ha registrado correctamente, recuerde que el comprobante le hemos mandado al correo que dejó, si no recibe el comprobante escribir al número 54256545",
                }).then(function () {
                    window.location.href = "/alquilar";
                });
            }).catch((err) => {
                console.log(err);
            })
        }
    }else if($("#tipoPago").val()==2){
        var formData = new FormData();
        formData.append('nombre', document.getElementById("nombre").value);
        formData.append('dpi', document.getElementById("dpi").value);
        formData.append('telefono', document.getElementById("telefono").value);
        formData.append('email', document.getElementById("email").value);
        formData.append('nit', document.getElementById("nit").value);
        formData.append('fecha', document.getElementById("fecha").value);
        formData.append('h_inicio', document.getElementById("hora").value);
        formData.append('h_terminar', document.getElementById("hora2").value);
        formData.append('tipo_pago', 2);
        formData.append('estado', 4);
        axios({
            url: "/guardarReserva",
            method: "post",
            data: formData
        }).then((res) =>{
            console.log(res.data);                           
            swal({
                icon: "success",
                title: "Atención",
                text: "¡Se ha registrado correctamente, recuerde hacer el pago y mandar la captura al número 25463254!",
            }).then(function () {
                window.location.href = "/alquilar";
            });
        }).catch((err) => {
            console.log(err);
        })        
    }else if($("#tipoPago").val()==3){
        var formData = new FormData();
        formData.append('nombre', document.getElementById("nombre").value);
        formData.append('dpi', document.getElementById("dpi").value);
        formData.append('telefono', document.getElementById("telefono").value);
        formData.append('email', document.getElementById("email").value);
        formData.append('nit', document.getElementById("nit").value);
        formData.append('fecha', document.getElementById("fecha").value);
        formData.append('h_inicio', document.getElementById("hora").value);
        formData.append('h_terminar', document.getElementById("hora2").value);
        formData.append('tipo_pago', 3);
        formData.append('estado', 2);
        axios({
            url: "/guardarReserva",
            method: "post",
            data: formData
        }).then((res) =>{
            console.log(res.data);                           
            swal({
                icon: "success",
                title: "Atención",
                text: "¡Se ha registrado correctamente, en su correo le hemos enviado un comprobante, debe presentarlo para cancelar en las instalaciones",
            }).then(function () {
                window.location.href = "/alquilar";
            });
        }).catch((err) => {
            console.log(err);
        })
    }else{
        swal({
            icon: "warning",
            title: "Atención",
            text: "Seleccione un método de pago",
        })
    }
}

function cargarHorario(){
    var formData= new FormData();
        formData.append("fecha", document.getElementById("fecha").value);    
    axios({
        url: "/getReserva",
        method: "post",
        data: formData,
    }).then((res) =>{         
        var datos=res.data;
        /* console.log(datos); */
        $("#hora").val("");
        $("#hora2").val("");
        if(fechaG!=document.getElementById("fecha").value){
            for(var i=0; i<horas.length; i++){
                horas[i]=0;
            }
            resetearButtons();
        }
        fechaG=document.getElementById("fecha").value;
        if(datos!=""){
            datos.forEach(Reserva => {                
                var h_inicio=new Date("July 7, 2023 "+Reserva.h_inicio);
                var h_terminar=new Date("July 7, 2023 "+Reserva.h_terminar);
                var m_inicio, m_terminar;            
                var contI, contF, contadorCiclo;            
                
                m_inicio = h_inicio.getMinutes();
                m_terminar = h_terminar.getMinutes();
                h_inicio = h_inicio.getHours();
                h_terminar = h_terminar.getHours();
    
                contF = (h_terminar-h_inicio)/0.5;
                if(m_terminar==m_inicio){
                    /* contI = (m_terminar+m_inicio)/30; */
                    contadorCiclo=contF;
                }else if(m_inicio<m_terminar){
                    contI = (m_terminar-m_inicio)/30;
                    contadorCiclo=contF+contI;
                }else{
                    contI = (m_inicio-m_terminar)/30;
                    contadorCiclo=contF-contI;
                }
                var posicionInicio;
                posicionInicio = casosHora(h_inicio, m_inicio);
    
                /* console.log(posicionInicio); */
                habilitarHorario(posicionInicio, contadorCiclo);
                
            });
        }else{
            habilitarHorarioTodoLibre();
        }
        
    }).catch((err) => {
        console.log(err);
    })
}


function casosHora(hora, minutos){
    if(hora==14 && minutos==0){
        return 0;
    }else if(hora==14 && minutos==30){
        return 1;
    }
    /* *************** */
    if(hora==15 && minutos==0){
        return 2;
    }else if(hora==15 && minutos==30){
        return 3;
    }
    /* *************** */
    if(hora==16 && minutos==0){
        return 4;
    }else if(hora==16 && minutos==30){
        return 5;
    }
    /* *************** */
    if(hora==17 && minutos==0){
        return 6;
    }else if(hora==17 && minutos==30){
        return 7;
    }
    /* *************** */
    if(hora==18 && minutos==0){
        return 8;
    }else if(hora==18 && minutos==30){
        return 9;
    }
    /* *************** */
    if(hora==19 && minutos==0){
        return 10;
    }else if(hora==19 && minutos==30){
        return 11;
    }
    /* *************** */
    if(hora==20 && minutos==0){
        return 12;
    }else if(hora==20 && minutos==30){
        return 13;
    }
}

function habilitarHorario(inicio, contador){
    for(var i=inicio; i<=(inicio+(contador-1)); i++){
        horas[i]=3;
        document.querySelector('#btn'+(i+1)).classList.remove('btn-secondary');
        document.querySelector('#btn'+(i+1)).classList.remove('btn-info');
        document.querySelector('#btn'+(i+1)).classList.add('btn-danger');
        document.querySelector('#btn'+(i+1)).disabled = true;
        document.querySelector('#estadoText'+(i+1)).textContent = "Ocupado";
    }

    for(var i=0; i<horas.length; i++){
        if($("#btn"+(i+1)).hasClass("btn-danger") || $("#btn"+(i+1)).hasClass("btn-warning")){
            document.querySelector('#btn'+(i+1)).disabled = true;
        }else{
            document.querySelector('#btn'+(i+1)).disabled = false;
        }
    }    
}

function habilitarHorarioTodoLibre(){
    for(var i=0; i<horas.length; i++){
        horas[i]=0;
    }
    for(var i=0; i<horas.length; i++){
        document.querySelector('#btn'+(i+1)).classList.remove('btn-info');
        document.querySelector('#btn'+(i+1)).classList.remove('btn-danger');
        document.querySelector('#btn'+(i+1)).classList.add('btn-secondary');
        document.querySelector('#btn'+(i+1)).disabled = false;
        document.querySelector('#estadoText'+(i+1)).textContent = "Libre";
    }
}

function resetearButtons(){
    for(var i=0; i<horas.length; i++){
        document.querySelector('#btn'+(i+1)).classList.remove('btn-info');
        document.querySelector('#btn'+(i+1)).classList.remove('btn-danger');
        document.querySelector('#btn'+(i+1)).classList.add('btn-secondary');
        document.querySelector('#btn'+(i+1)).disabled = true;
        document.querySelector('#estadoText'+(i+1)).textContent = "Libre";
    }
}

function habilitarBoton(){
    if($("#terminos").is(":checked")){
        $("#btn-reservar").prop('disabled',false);
    }else{
        $("#btn-reservar").prop('disabled',true);
    }
}