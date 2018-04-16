var lineChartdata1 = {
    labels: [],
    datasets: [
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28]
        }
    ]
};

var lineChartdata2 = {
    labels: [],
    datasets: [
        {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86, 27, 90]
        }
    ]
};

function getYears(from) {
    var d1 = new Date(from),
        d2 = new Date(),
        yr = [];

    for (var i=d1.getFullYear(); i<=d2.getFullYear(); i++) {
        yr.push( i );
    }

    return yr;
}

$(document).ready(function () {
    var cxt1 = document.getElementById("line-area1").getContext("2d");

    var cxt2 = document.getElementById("line-area2").getContext("2d");

    lineChartdata1.labels = getYears('2018');
    lineChartdata2.labels = getYears('2005');
    var myLineChart1 = new Chart(cxt1).Line(lineChartdata1, {
        responsive: true,
        maintainAspectRatio: true
    });
    var myLineChart2 = new Chart(cxt2).Line(lineChartdata2, {
        responsive: true,
        maintainAspectRatio: true
    });
    $('.menu .item').click(function () {
        // chart1
        var myLineChart1 = new Chart(cxt1).Line(lineChartdata1, {
            responsive: true,
            maintainAspectRatio: true
        });

        // chart2
        var myLineChart2 = new Chart(cxt2).Line(lineChartdata2, {
            responsive: true,
            maintainAspectRatio: true
        });
    });
})