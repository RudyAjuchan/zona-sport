window.onload = function(){
    $("#loader2").fadeOut();
    $("body").removeClass('hidden');
}
var g1 = new Chart('grafica1', {type: 'line'});
var g2 = new Chart('grafica2', {type: 'line'});
var g3 = new Chart('grafica3', {type: 'doughnut'});

const printCharts = () =>{
    fetchData('/datosGraficas', '/datosGraficas2', '/datosGraficas3', '/datosGraficas4')
    .then(([reservaMesActual, reservaMesAnterior, tendenciaHorario, tendenciaPago]) => {
        renderGrafica1(reservaMesActual, reservaMesAnterior)
        renderGrafica2(tendenciaHorario)
        renderGrafica3(tendenciaPago)
    });
    
}

function grafica1(){
    axios({
        url: "/datosDashboard",
        method: "get",        
    }).then((res) =>{        
        document.querySelector("#reserva").textContent=res.data.reservaHoy;
        document.querySelector("#reserva2").textContent=res.data.reservaMes;
        document.querySelector("#reserva3").textContent=res.data.reservaAnio;
        document.querySelector("#reserva4").textContent=res.data.reservaMes2;
    }).catch((err) => {
        console.log(err);
    })
}

function renderGrafica1(reservaMesActual, reservaMesAnterior){
    const dias = ['día 1','día 2','día 3','día 4','día 5','día 6','día 7','día 8','día 9',
                    'día 10','día 11','día 12','día 13','día 14','día 15','día 16','día 17','día 18','día 19',
                    'día 20','día 21','día 22','día 23','día 24','día 25','día 26','día 27','día 28','día 29',
                    'día 30', 'día 31'];

    let data1 = [];
    for(var i=0; i<31; i++){
        data1.push(0);
    }   
    for(var i = 0; i<31; i++){
        reservaMesActual.forEach(item => {
            if(item.dia==i) data1[i]++;
        });
    }

    let data2 = [];
    for(var i=0; i<31; i++){
        data2.push(0);
    }
    for(var i = 0; i<31; i++){
        reservaMesAnterior.forEach(item => {
            if(item.dia==i) data2[i]++;
        });
    }


    const data = {        
        labels: dias,
        datasets: [
            {            
                label: "Mes actual",
                data: data1,
                tension: .5,
                borderColor: getDataColors()[3],
                backgroundColor: getDataColors(50)[3],
                fill: true,
                pointBorderWidth: 5
            },
            {            
                label: "Mes anterior",
                data: data2,
                tension: .5,
                borderColor: getDataColors()[1],
                backgroundColor: getDataColors(50)[1],
                fill: true,
                pointBorderWidth: 5
            }
        ]
    }

    const options = {
        plugins: {
            legend: {display: false}
        },
    }
    g1.data = data;
    g1.options = options;
    g1.update();
}
function renderGrafica2(tendenciaHorario){
    const uniqueHorario = [... new Set(tendenciaHorario.map(tendenciaHorario => tendenciaHorario.nombre))];

    const data = {        
        labels: uniqueHorario,
        datasets: [
            {            
                label: "Mes actual",
                data: uniqueHorario.map(currentModel => tendenciaHorario.filter(tendenciaHorario => tendenciaHorario.nombre === currentModel).length),
                tension: .5,
                borderColor: getDataColors()[6],
                backgroundColor: getDataColors(50)[6],
                fill: true,
                pointBorderWidth: 5
            }
        ]
    }

    const options = {
        plugins: {
            legend: {display: false}
        },
    }
    g2.data = data;
    g2.options = options;
    g2.update();
}

function renderGrafica3(tendenciaPago){
    const labels = ['Pago con tarjeta','Pago previo deposio','Pago efectivo'];

    let pagos = [];
    pagos.push(0);
    pagos.push(0);
    pagos.push(0);
    pagos.push(0);

    for(var i=1; i<=3; i++){
        tendenciaPago.forEach(item => {
            if(item.tipo_pago==i){
                pagos[i]++;
            }
        });
    }

    pagos.shift();

    const data = {        
        labels: labels,
        datasets: [
            {            
                label: "Mes actual",
                data: pagos,
                borderColor: getDataColors(),
                backgroundColor: getDataColors(50)
            }
        ]
    }

    const options ={
        plugins: {
            legend: {position: 'left'}
        },
    }
    g3.data = data;
    g3.options = options;
    g3.update();
}

grafica1();
printCharts();