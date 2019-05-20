var numSimulations = 60;
var cardinalsPoint = [
    'North',
    'West',
    'East',
    'South',
];

var maxIdLogs;
window.onload = function () {
    var submitSimulation = document.getElementById('js-goSimulation');
    submitSimulation.addEventListener('click', function () {
        executeSimulation();
    });
};
function executeSimulation() {
    for (var _idx = 1; _idx <= 1; _idx++) {
        generateSimulation(_idx);
    }
}
function generateSimulation(_idx) {
    $.ajax({
        url: Routing.generate('get_last_history'),
        type: 'POST',
        data: {},
        dataType: 'json',
        success: function (data) {
            sendSimulationRequest(buildSimulationInterface(data.id, _idx));
        },
        error: function (request, error) {
            alert("Request: " + JSON.stringify(request));
        }
    });
}

function sendSimulationRequest(spaceSimulation) {
    $.ajax({
        url: Routing.generate('send_simulation'),
        type: 'POST',
        data: {
            simulator: spaceSimulation
        },
        dataType: 'json',
        success: function (data) {

        },
        error: function (request, error) {
            alert("Request: " + JSON.stringify(request));
        }
    });
}

function buildSimulationInterface(id, _idx) {
    return {
        idSimulation: id,
        num: _idx,
        cardinalPoint: randomCardinalPoint(),
        idTravel: randomIdTravel()
    };
}

function randomIdTravel() {
    return Math.floor(Math.random() * 20) + 10;
}

function randomCardinalPoint() {
    return cardinalsPoint[Math.floor(Math.random() * cardinalsPoint.length)];
}
