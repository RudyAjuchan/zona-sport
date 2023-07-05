AOS.init({duration: 1000});
jQuery.datetimepicker.setLocale('es');

let horas = [0,0,0,0,0,0,0,0,0,0,0,0,0,0];

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
                minDate: anio+'/'+mes+'/'+dia,
            });
        }     
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
        alert("!No se puede reservar en medio de un horario ocupado!, le recomendamos hacer reservas individuales")
        horas[posicionF]=0;
    }
}