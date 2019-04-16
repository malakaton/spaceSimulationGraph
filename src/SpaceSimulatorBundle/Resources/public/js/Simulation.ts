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
    for (let _idx = 1; _idx <= numSimulations; _idx++) {
        let spaceSimulation:Simulation = {
            idSimulation: 1,
            num: _idx,
            cardinalPoint: randomCardinalPoint(),
            idTravel: randomIdTravel()
        };

        console.log(spaceSimulation);
    }
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