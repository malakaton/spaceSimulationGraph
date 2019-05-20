const numSimulations = 60;

let cardinalsPoint: string[] = [
    'North',
    'West',
    'East',
    'South',
];

let maxIdLogs;

window.onload = function() {
    let submitSimulation = document.getElementById('js-goSimulation');

    submitSimulation.addEventListener('click', function() {
        executeSimulation();
    });
}


function executeSimulation() {
    for (let _idx = 1; _idx <= 1; _idx++) {
        let spaceSimulation:Simulation = {
            idSimulation: getIdSimulationvAvailable(),
            num: _idx,
            cardinalPoint: randomCardinalPoint(),
            idTravel: randomIdTravel()
        };
        console.log(spaceSimulation);
    }
}

function getIdSimulationvAvailable(): number {
    //@ts-ignore
    ajaxCalls(Routing.generate('get_last_history'));
    console.log('1'+maxIdLogs);

    return 1;
}

function ajaxCalls(url, param = null) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', url);
    xhr.onload = function() {
        if (xhr.status === 200) {
            maxIdLogs = JSON.parse(xhr.responseText);
        }
    };
    xhr.send(param);
}

function randomIdTravel() {
    return Math.floor(Math.random() * 20) + 10;
}

function randomCardinalPoint() {
    return cardinalsPoint[Math.floor(Math.random() * cardinalsPoint.length)];
}


interface Simulation {
    idSimulation: number;
    num: number;
    cardinalPoint: string;
    idTravel: number;
}