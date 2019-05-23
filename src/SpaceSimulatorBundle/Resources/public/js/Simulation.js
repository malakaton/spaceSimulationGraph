var numSimulations = 60;
var cardinalsPoint = [
    'North',
    'West',
    'East',
    'South',
];

var maxIdLogs;
window.onload = function () {
    google.charts.load('current', {'packages':['corechart']});
    var submitSimulation = document.getElementById('js-goSimulation');
    submitSimulation.addEventListener('click', function () {
        executeSimulation();
    });
};
function executeSimulation() {
    for (var _idx = 1; _idx <= numSimulations; _idx++) {
        generateSimulation(_idx);
    }
}
function generateSimulation(_idx) {
    $.ajax({
        url: Routing.generate('get_last_history'),
        type: 'POST',
        data: {},
        dataType: 'json',
        async: false,
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
        async: false,
        success: function (data) {
            if (data.result.res != 'ko') {
                showInfo(JSON.parse(data.result.res));
            } else {
                numSimulations++;
            }
        },
        error: function (request, error) {
            numSimulations++;
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

function showInfo(results) {
    const res = parseData(results);

    showGeneralData(res);
    showGraphic(res);
    $('#results').css('display', 'block');
}

function showGeneralData(data) {
    let mostFrequent = '', maxAppears = 0;

    for (let key in data.res) {
        if (data.res[key]['numAppears'] > maxAppears) {
            maxAppears = data.res[key]['numAppears'];
            mostFrequent = key;
        } else if (data.res[key]['numAppears'] === maxAppears) {
            mostFrequent += ' and ' + key;
        }
    }

    $('#cardinalPointFrequency').html(mostFrequent);
    $('#totalPath').html(data.totalPath);
}

function showGraphic(data) {
    let res = [new Array('Task', 'Cardinal Points by idTravel')];

    for (let key in data.res) {
        res.push([key, data.res[key].idTravel]);
    }

    const dataGraph = google.visualization.arrayToDataTable(res),
        options = {'title':'Cardinal Points / Travel', 'width':550, 'height':400},
        chart = new google.visualization.PieChart($('#graphic')[0]);

    chart.draw(dataGraph, options);
}

function parseData(result) {
    let res = [], totalPath = 0;

    for (let data of cardinalsPoint) {
        res[data] = [];
        res[data]['idTravel'] = 0;
        res[data]['numAppears'] = 0;
    }

    for(let data of result) {
        totalPath += parseInt(data['idTravel']);
        res[data['cardinalPoint']]['idTravel'] += parseInt(data['idTravel']);
        res[data['cardinalPoint']]['numAppears']++;
    }

    return {'res': res, 'totalPath': totalPath};
}
