var numSimulations = 60;
var cardinalsPoint = [
    'North',
    'West',
    'East',
    'South',
];
window.onload = function () {
    var submitSimulation = document.getElementById('js-goSimulation');
    submitSimulation.addEventListener('click', function () {
        executeSimulation();
    });
};
function executeSimulation() {
    for (var _idx = 1; _idx <= numSimulations; _idx++) {
        var spaceSimulation = {
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
