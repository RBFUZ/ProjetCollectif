function getYears(from) {
    var d1 = new Date(from),
        d2 = new Date(),
        yr = [];

    for (var i=d1.getFullYear(); i<=d2.getFullYear(); i++) {
        yr.push( i );
    }

    return yr;
}

var makeLineChartData = function (label,data) {
    var lineChartData = {
        labels: label,
        datasets: [
            {
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: data
            }
        ]
    };
    return lineChartData;
}

var makeLineChart = function (cxt,chartData) {
    var cxt1 = document.getElementById(cxt).getContext("2d");
    var lineChart = new Chart(cxt1).Line(chartData, {
        responsive: true,
        maintainAspectRatio: true
    });
    return lineChart;
}

// update data from database filter by department
var getDataForCharts = function (department) {
    // get data from database
    console.log(department)
    return [1,2,3,4,5,6];
}

$(document).ready(function () {
    // stage chart1
    lineChartInterndata1 = makeLineChartData(getYears('2005'),[1,2,3,4,52]);
    myLineChart1 = makeLineChart("line-area1",lineChartInterndata1);

    // stage chart2
    lineChartInterndata2 = makeLineChartData(getYears('2005'),[23,2,12,3]);
    myLineChart2 = makeLineChart("line-area2",lineChartInterndata2);

    //apprentissage chart1
    lineChartApprendata1 = makeLineChartData(getYears('2005'),[23,2,12,3]);
    apprentissageLineChart1 = makeLineChart("line-area-apprentissage1",lineChartApprendata1);

    //apprentissage chart2
    lineChartApprendata2  = makeLineChartData(getYears('2005'),[23,2,12,3]);
    apprentissageLineChart2 = makeLineChart("line-area-apprentissage2",lineChartApprendata2);

    // taxe_apprentissage chartTotal
    lineChartTaxedataTotal  = makeLineChartData(getYears('2005'),[23,2,12,3]);
    taxe_apprentissageLineChartTotal = makeLineChart("line-area_taxeApprentissageTotal",lineChartTaxedataTotal);

    // taxe_apprentissage chartDI
    lineChartTaxedataDI  = makeLineChartData(getYears('2005'),[23,2,12,3]);
    taxe_apprentissageLineChartDI = makeLineChart("line-area_taxeApprentissageDI",lineChartTaxedataDI);

    // taxe_apprentissage chartDII
    lineChartTaxedataDII  = makeLineChartData(getYears('2005'),[23,2,12,3]);
    taxe_apprentissageLineChartDII = makeLineChart("line-area_taxeApprentissageDII",lineChartTaxedataDII);

    // taxe_apprentissage chartDAE
    lineChartTaxedataDAE  = makeLineChartData(getYears('2005'),[23,2,12,3]);
    taxe_apprentissageLineChartDAE = makeLineChart("line-area_taxeApprentissageDAE",lineChartTaxedataDAE);

    // taxe_apprentissage chartDMS
    lineChartTaxedataDMS  = makeLineChartData(getYears('2005'),[23,2,12,3]);
    taxe_apprentissageLineChartDMS = makeLineChart("line-area_taxeApprentissageDMS",lineChartTaxedataDMS);

    // taxe_apprentissage chartDEE
    lineChartTaxedataDEE  = makeLineChartData(getYears('2005'),[23,2,12,3]);
    taxe_apprentissageLineChartDEE = makeLineChart("line-area_taxeApprentissageDEE",lineChartTaxedataDEE);

    // disable department for forum and conference
    $("#tab_etab").ready(function () {
        if($("#tab_etab .active").attr("data-tab")==="fourth"||$("#tab_etab .active").attr("data-tab")==="third"){
            $("#department_select").hide();
        }
        else{
            $("#department_select").show();
        }
    })

    // tab clicked
    $('.menu .item').click(function () {
        // stage chart1
        myLineChart1.destroy();
        myLineChart1 = makeLineChart("line-area1",lineChartInterndata1);

        // stage chart2
        myLineChart2.destroy();
        myLineChart2 = makeLineChart("line-area2",lineChartInterndata2);

        // apprentissage chart1
        apprentissageLineChart1.destroy();
        apprentissageLineChart1 = makeLineChart("line-area-apprentissage1",lineChartApprendata1);

        // apprentissage chart2
        apprentissageLineChart2.destroy();
        apprentissageLineChart2 = makeLineChart("line-area-apprentissage2",lineChartApprendata2);

        // taxe_apprentissage chartTotal
        taxe_apprentissageLineChartTotal.destroy();
        taxe_apprentissageLineChartTotal = makeLineChart("line-area_taxeApprentissageTotal",lineChartTaxedataTotal);

        // taxe_apprentissage chartDI
        taxe_apprentissageLineChartDI.destroy();
        taxe_apprentissageLineChartDI = makeLineChart("line-area_taxeApprentissageDI",lineChartTaxedataDI);

        // taxe_apprentissage chartDII
        taxe_apprentissageLineChartDII.destroy();
        taxe_apprentissageLineChartDII = makeLineChart("line-area_taxeApprentissageDII",lineChartTaxedataDII);

        // taxe_apprentissage chartDAE
        taxe_apprentissageLineChartDAE.destroy();
        taxe_apprentissageLineChartDAE = makeLineChart("line-area_taxeApprentissageDAE",lineChartTaxedataDAE);

        // taxe_apprentissage chartDMS
        taxe_apprentissageLineChartDMS.destroy();
        taxe_apprentissageLineChartDMS = makeLineChart("line-area_taxeApprentissageDMS",lineChartTaxedataDMS);

        // taxe_apprentissage chartDEE
        taxe_apprentissageLineChartDEE.destroy();
        taxe_apprentissageLineChartDEE = makeLineChart("line-area_taxeApprentissageDEE",lineChartTaxedataDEE);

        console.log($(this).text())
        // disable the department select for forum and conference
        if($(this).text()==="Forum" || $(this).text()==="Conférence") {
            $("#department_select").hide();
        }
        else{
            $("#department_select").show();
        }
    });

    // department change
    $("input[name='department']").change(function () {
        myLineChart1.destroy();
        // change data
        lineChartInterndata1.datasets[0].data = getDataForCharts($(this).val())
        myLineChart1 = makeLineChart("line-area1",lineChartInterndata1);
        // stage chart2
        myLineChart2.destroy();
        // change data
        lineChartInterndata2.datasets[0].data = getDataForCharts($(this).val())
        myLineChart2 = makeLineChart("line-area2",lineChartInterndata2);

        // apprentissage chart1
        apprentissageLineChart1.destroy();
        // change data
        lineChartApprendata1.datasets[0].data = getDataForCharts($(this).val())
        apprentissageLineChart1 = makeLineChart("line-area-apprentissage1",lineChartApprendata1);

        // apprentissage chart2
        apprentissageLineChart2.destroy();
        // change data
        lineChartApprendata2.datasets[0].data = getDataForCharts($(this).val())
        apprentissageLineChart2 = makeLineChart("line-area-apprentissage2",lineChartApprendata2);
    })
});

var getDataForCharts = function (department) {
    // get data from database
    console.log(department)
    return [1,2,3,4,5,6];
}