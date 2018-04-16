var lineChartInterndata1 = {
    labels: [],
    datasets: [
        {
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

var lineChartInterndata2 = {
    labels: [],
    datasets: [
        {
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

var lineChartApprendata1 = {
    labels: [],
    datasets: [
        {
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
var lineChartApprendata2 = {
    labels: [],
    datasets: [
        {
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
    // stage chart1
    var cxt1 = document.getElementById("line-area1").getContext("2d");
    lineChartInterndata1.labels = getYears('2005');
    myLineChart1 = new Chart(cxt1).Line(lineChartInterndata1, {
        responsive: true,
        maintainAspectRatio: true
    });

    // stage chart2
    var cxt2 = document.getElementById("line-area2").getContext("2d");
    lineChartInterndata2.labels = getYears('2005');
    myLineChart2 = new Chart(cxt2).Line(lineChartInterndata2, {
        responsive: true,
        maintainAspectRatio: true
    });

    //apprentissage chart1
    var apprentissage_cxt1 = document.getElementById("line-area-apprentissage1").getContext("2d");
    lineChartApprendata1.labels = getYears('2005');
    apprentissageLineChart1 = new Chart(apprentissage_cxt1).Line(lineChartApprendata1, {
        responsive: true,
        maintainAspectRatio: true
    });

    //apprentissage chart2
    var apprentissage_cxt2 = document.getElementById("line-area-apprentissage2").getContext("2d");
    lineChartApprendata2.labels = getYears('2005');
    apprentissageLineChart2 = new Chart(apprentissage_cxt2).Line(lineChartApprendata2, {
        responsive: true,
        maintainAspectRatio: true
    });


    $('.menu .item').click(function () {
        // stage chart1
        myLineChart1.destroy();
        myLineChart1 = new Chart(cxt1).Line(lineChartInterndata1, {
            responsive: true,
            maintainAspectRatio: true
        });


        // stage chart2
        myLineChart2.destroy();
        myLineChart2 = new Chart(cxt2).Line(lineChartInterndata2, {
            responsive: true,
            maintainAspectRatio: true
        });

        // apprentissage chart1
        apprentissageLineChart1.destroy();
        apprentissageLineChart1 = new Chart(apprentissage_cxt1).Line(lineChartApprendata1, {
            responsive: true,
            maintainAspectRatio: true
        });

        // apprentissage chart2
        apprentissageLineChart2.destroy();
        apprentissageLineChart2 = new Chart(apprentissage_cxt2).Line(lineChartApprendata2, {
            responsive: true,
            maintainAspectRatio: true
        });
    });

    $("input[name='department']").change(function () {
        myLineChart1.destroy();
        // change data
        lineChartInterndata1.datasets[0].data = getDataForCharts($(this).val())
        myLineChart1 = new Chart(cxt1).Line(lineChartInterndata1, {
            responsive: true,
            maintainAspectRatio: true
        });

        // stage chart2
        myLineChart2.destroy();
        // change data
        lineChartInterndata2.datasets[0].data = getDataForCharts($(this).val())
        myLineChart2 = new Chart(cxt2).Line(lineChartInterndata2, {
            responsive: true,
            maintainAspectRatio: true
        });

        // apprentissage chart1
        apprentissageLineChart1.destroy();
        // change data
        lineChartApprendata1.datasets[0].data = getDataForCharts($(this).val())
        apprentissageLineChart1 = new Chart(apprentissage_cxt1).Line(lineChartApprendata1, {
            responsive: true,
            maintainAspectRatio: true
        });

        // apprentissage chart2
        apprentissageLineChart2.destroy();
        // change data
        lineChartApprendata2.datasets[0].data = getDataForCharts($(this).val())
        apprentissageLineChart2 = new Chart(apprentissage_cxt2).Line(lineChartApprendata2, {
            responsive: true,
            maintainAspectRatio: true
        });

    })
});

var getDataForCharts = function (department) {
    // get data from database
    console.log(department)
    return [1,2,3,4,5,6];
}