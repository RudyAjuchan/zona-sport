AOS.init({duration: 1000});
jQuery.datetimepicker.setLocale('es');

let btnI=0, btnF=0;
let posI, posF;
let totalPago=0;

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


function reset(){
    $('#formReserva').trigger("reset");
    $("#tipoPago1").hide();
    $("#tipoPago2").hide();
    $("#tipoPago3").hide();
    $('#formTarjeta').trigger("reset");
    $("#content-btn").empty();
}

function abrirModoPago(){

    var form = document.getElementById('formReserva');

    if (!form.checkValidity() || document.getElementById("hora").value=="" || document.getElementById("hora2").value=="") {
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
        myModal.show();

        if($("#luz").prop('checked')){
            totalPago=65*((posF-posI)+1);                        
        }else{
            totalPago=50*((posF-posI)+1);
        }
        totalPago=totalPago.toFixed(2);
        document.querySelector(".textPago1").innerHTML = totalPago.toString();
        document.querySelector(".textPago2").innerHTML = totalPago.toString();
        document.querySelector(".textPago3").innerHTML = totalPago.toString();
        console.log(totalPago);
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
            var DPI = document.getElementById("dpi").value;
            DPI.trim();
            formData.append('nombre', document.getElementById("nombre").value);
            formData.append('dpi', DPI);
            formData.append('telefono', document.getElementById("telefono").value);
            formData.append('email', document.getElementById("email").value);
            formData.append('nit', document.getElementById("nit").value);
            formData.append('fecha', document.getElementById("fecha").value);
            formData.append('h_inicio', document.getElementById("hora").value);
            formData.append('h_terminar', document.getElementById("hora2").value);
            formData.append('tipo_pago', 1);
            formData.append('estado', 1);
            formData.append('inicio', posI);
            formData.append('fin', posF);
            formData.append('total', totalPago);
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
        var DPI = document.getElementById("dpi").value;
            DPI.trim();
        formData.append('nombre', document.getElementById("nombre").value);
        formData.append('dpi', DPI);
        formData.append('telefono', document.getElementById("telefono").value);
        formData.append('email', document.getElementById("email").value);
        formData.append('nit', document.getElementById("nit").value);
        formData.append('fecha', document.getElementById("fecha").value);
        formData.append('h_inicio', document.getElementById("hora").value);
        formData.append('h_terminar', document.getElementById("hora2").value);
        formData.append('tipo_pago', 2);
        formData.append('estado', 4);
        formData.append('inicio', posI);
        formData.append('fin', posF);
        formData.append('total', totalPago);
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
        var DPI = document.getElementById("dpi").value;
            DPI.trim();
        formData.append('nombre', document.getElementById("nombre").value);
        formData.append('dpi', DPI);
        formData.append('telefono', document.getElementById("telefono").value);
        formData.append('email', document.getElementById("email").value);
        formData.append('nit', document.getElementById("nit").value);
        formData.append('fecha', document.getElementById("fecha").value);
        formData.append('h_inicio', document.getElementById("hora").value);
        formData.append('h_terminar', document.getElementById("hora2").value);
        formData.append('tipo_pago', 3);
        formData.append('estado', 2);
        formData.append('inicio', posI);
        formData.append('fin', posF);
        formData.append('total', totalPago);
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
    var dia = new Date($("#fecha").val()).getDay();
    var dia_id;
    if(dia>=0 && dia <=4){
        dia_id=1;
        btnI=13;
        btnF=26;
    }else if(dia==5){
        dia_id=2;
        btnI=1;
        btnF=26;
    }else if(dia==6){
        dia_id=3;
        btnI=11;
        btnF=26;
    }
    var formData= new FormData();
        formData.append("dia_id", dia_id);
        formData.append("fecha", document.getElementById("fecha").value);
    
    axios({
        url: "/getReserva",
        method: "post",
        data: formData,
    }).then((res) =>{
        $("#content-btn").empty();
        $("#content-btn").append('<p class="text-center">Por favor seleccione el horario.(No puedes elegir horarios salteados, selecciona el día a reservar para habilitar)</p>');
        res.data.horarios.forEach(H => {
            var banderaBTN = false;
            res.data.reservados.forEach(R => {
                if(R.horas_id==H.horas.id){
                    banderaBTN=true;
                }
            });
            if(banderaBTN){
                $("#content-btn").append('<button class="btn btn-danger disabled btn-sm mt-2 me-1 btn-alquilar" type="button" id="btn'+ H.horas.id +'" onclick="apartar('+ H.horas.id +');">'+ H.horas.nombre +'<br><span id="estadoText'+ H.horas.id +'">Ocupado</span></button>');
            }else{
                $("#content-btn").append('<button class="btn btn-secondary btn-sm mt-2 me-1 btn-alquilar" type="button" id="btn'+ H.horas.id +'" onclick="apartar('+ H.horas.id +');">'+ H.horas.nombre +'<br><span id="estadoText'+ H.horas.id +'">Libre</span></button>');
            }
        });
        revisarButton();         
    }).catch((err) => {
        console.log(err);
    })
}

function apartar(id){
    /* $("#btn"+id).prop('disabled',true); */
    var btn = document.querySelector('#btn'+id);
    posI=0;
    posF=0;
    if(btn.classList.contains('btn-secondary')){
        btn.classList.remove('btn-secondary');        
        btn.classList.add('btn-info');
    }else{
        btn.classList.remove('btn-info');
        btn.classList.add('btn-secondary');
    }

    for(var i=btnI; i<=btnF; i++){
        if(document.querySelector("#btn"+i).classList.contains("btn-info")){
            posI=i;
            break;
        }
    }    

    for(var i=btnF; i>=btnI; i--){
        if(document.querySelector("#btn"+i).classList.contains("btn-info")){
            posF=i;
            break;
        }
    }

    var formData= new FormData();
    formData.append("horaI", posI);
    formData.append("horaF", posF);
    axios({
        url: "/obtenerHoras",
        method: "post",
        data: formData
    }).then((res) =>{
        $("#hora").val(res.data.datosHI.h_inicio);
        $("#hora2").val(res.data.datosHF.h_fin);
    }).catch((err) => {
        console.log(err);
    })

    for(var i=posI; i<=posF; i++){
        if(document.querySelector("#btn"+i).classList.contains('btn-danger')){          
            swal({
                icon: "warning",
                title: "Atención",
                text: "!No se puede reservar en medio de un horario ocupado!, le recomendamos hacer reservas individuales, por favor vuelva a elegir el día de nuevo",
            }).then(function () {
                $("#hora").val('');
                $("#hora2").val('');
                $("#fecha").val("");
                $("#content-btn").empty();
            });
            break;
        }else{
            document.querySelector("#btn"+i).classList.remove('btn-secondary');        
            document.querySelector("#btn"+i).classList.add('btn-info');
        }        
    }
}

function habilitarBoton(){
    if($("#terminos").is(":checked")){
        $("#btn-reservar").prop('disabled',false);
    }else{
        $("#btn-reservar").prop('disabled',true);
    }
}

function revisarButton(){
    var fechaHora = new Date();
    var fecha = fechaHora.getFullYear() + "-" +((fechaHora.getMonth()+1).toString().length != 2 ? "0" + (fechaHora.getMonth() + 1) : (fechaHora.getMonth()+1)) + "-" + (fechaHora.getDate().toString().length != 2 ? "0" + fechaHora.getDate() : fechaHora.getDate());
    var hora = fechaHora.getHours();
    var minutos = fechaHora.getMinutes();
    if(document.getElementById("fecha").value == fecha){
        var hora_id = hora-7;
        if(hora_id>1){
            hora_id*=2;            
            if(minutos<30){
                hora_id--;
            }
        }    
        
        if(hora_id==1 && minutos>=30){
            hora_id++;
        }        
    }

    for(var i =1; i<=hora_id; i++){
        $("#btn"+i).prop('disabled',true);
    }
}