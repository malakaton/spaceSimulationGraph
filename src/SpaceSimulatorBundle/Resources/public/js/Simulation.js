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
        var spaceSimulation = {
            idSimulation: getIdSimulationvAvailable(),
            num: _idx,
            cardinalPoint: randomCardinalPoint(),
            idTravel: randomIdTravel()
        };
        console.log(spaceSimulation);
    }
}
function getIdSimulationvAvailable() {
    //@ts-ignore
    ajaxCalls(Routing.generate('get_last_history'));
    console.log('1' + maxIdLogs);
    return 1;
}
function ajaxCalls(url, param) {
    if (param === void 0) { param = null; }
    var xhr = new XMLHttpRequest();
    xhr.open('POST', url);
    xhr.onload = function () {
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
