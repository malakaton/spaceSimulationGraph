const numSimulations = 60;

let cardinalsPoint: string[] = [
    'North',
    'West',
    'East',
    'South',
];

window.onload = function() {
    let submitSimulation = document.getElementById('js-goSimulation');

    submitSimulation.addEventListener('click', function() {
        executeSimulation();
    });
}


function executeSimulation() {
    getIdSimulationvAvailable();
    // for (let _idx = 1; _idx <= numSimulations; _idx++) {
    //     let spaceSimulation:Simulation = {
    //         idSimulation: getIdSimulationvAvailable(),
    //         num: _idx,
    //         cardinalPoint: randomCardinalPoint(),
    //         idTravel: randomIdTravel()
    //     };
    //
    //     console.log(spaceSimulation);
    // }
}

function getIdSimulationvAvailable() {
    console.log(Routing.generate('get_last_history'));
    return 1;
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