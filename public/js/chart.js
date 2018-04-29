function getYears(from) {
    var d1 = new Date(from),
        d2 = new Date(),
        yr = [];

    for (var i=d1.getFullYear(); i<=d2.getFullYear(); i++) {
        yr.push( i );
    }

    return yr;
}
// make chart data
var makeLineChartData = function (year, mainLabel, label, data) {
    var lineChartData = {
			type: 'line',
			data: {
				labels: year,
				datasets: [{
					label: mainLabel,
                    backgroundColor: "rgba(151,187,205,0.2)",
					borderColor: "rgba(48, 144, 211, 0.5)",
					data: data,
					fill: true,
				}]
			},
			options: {
				responsive: true,
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				},
				scales: {
					xAxes: [{
						display: true,
						scaleLabel: {
							display: true,
							labelString: 'Années'
						}
					}],
					yAxes: [{
                        ticks: {
                            min: 0,
                        },
						display: true,
						scaleLabel: {
							display: true,
							labelString: label
						}
					}]
				}
			}
		};
    return lineChartData;
}

// make chart
var makeLineChart = function (canvas,chartData) {

    var ctx = document.getElementById(canvas).getContext('2d');
	var lineChart = new Chart(ctx, chartData);

    return lineChart;
}

// make bar chart
var makeBarChart = function (cxt,chartData) {
    var ctx = document.getElementById(cxt).getContext('2d');
    var lineChart = new Chart(ctx, {
				type: 'bar',
				data: chartData,
				options: {
					tooltips: {
						mode: 'index',
						intersect: false
					},
					responsive: true,
					scales: {
						xAxes: [{
							stacked: true,
                            scaleLabel: {
    							display: true,
    							labelString: 'Années'
    						}
						}],
						yAxes: [{
                            ticks: {
                                min: 0,
                            },
							stacked: false,
                            scaleLabel: {
    							display: true,
    							labelString: 'Nombre'
    						}
						}]
					}
				}
			});
    return lineChart;
}

// make bar chart data
var makeBarChartData = function (label,data1, data2) {
    var barChartData = {
		labels: label,
		datasets: [{
			label: 'Gratification obtenue',
			backgroundColor: "rgba(48, 144, 211, 0.5)",
			stack: 'Stack 0',
			data: data1
		}, {
            label: 'Total de stages effectués',
			backgroundColor: "rgba(140, 205, 249, 0.5)",
			stack: 'Stack 0',
			data: data2
        }]};
    return barChartData;
}

var getInformationFromController = function (my_url) {
    var url = my_url;
    var year = "2010";
    $.ajax({
        type:'get',
        url:url,
        async:false,
        success:function (data) {
            if(data.data) {
                year =  data.data;
            }
        }
    });
    return year;
}

// update data from database filter by department
var getDataForCharts = function (department) {
    // get data from database
    console.log(department)
    return [1,2,3,4,5,6];
}

$(document).ready(function () {
   var minStageYear = getInformationFromController("/establishment/minStageYear");
   var countStageEachYear = getInformationFromController("/establishment/countStageEachYear")
   var minApprenticeshipYear = getInformationFromController("/establishment/minApprentissageYear");
   var minTaxeYear = getInformationFromController("/establishment/minTaxeYear");

    // stage chart1
    lineChartInterndata1 = makeLineChartData(getYears(minStageYear), "Nombre de stagiaires / an", "Nombre de stagiaires", countStageEachYear);
    myLineChart1 = makeLineChart("line-area1",lineChartInterndata1);

    // stage chart2
    lineChartInterndata2 = makeBarChartData(getYears(minStageYear), getInformationFromController("/establishment/countStageMoneyEachYear"), countStageEachYear);
    myLineChart2 = makeBarChart("line-area2",lineChartInterndata2);

    //apprentissage chart1
    lineChartApprendata1 = makeLineChartData(getYears(minApprenticeshipYear), "Nombre d'apprentis / an", "Nombre d'apprentis", getInformationFromController("/establishment/countApprenticeshipEachYear"));
    apprentissageLineChart1 = makeLineChart("line-area-apprentissage1",lineChartApprendata1);


    // disable department for forum and conference
    $("#tab_etab").ready(function () {
        if($("#tab_etab .active").attr("data-tab")==="fourth"||$("#tab_etab .active").attr("data-tab")==="third"){
            $("#department_select").hide();
        }
        else{
            $("#department_select").show();
        }
    })

    var mainLabel = "Taxe d'apprentissage / an";
    var label = "Montant en €";

    // taxe_apprentissage chartTotal
    lineChartTaxedataTotal  = makeLineChartData(getYears(minTaxeYear), mainLabel, label, getInformationFromController("/establishment/countTaxeEachYear"));
    taxe_apprentissageLineChartTotal = makeLineChart("line-area_taxeApprentissageTotal",lineChartTaxedataTotal);

    // taxe_apprentissage chartDI
    lineChartTaxedataDI  = makeLineChartData(getYears(minTaxeYear), mainLabel, label, [23,2,12,3]);
    taxe_apprentissageLineChartDI = makeLineChart("line-area_taxeApprentissageDI",lineChartTaxedataDI);

    // taxe_apprentissage chartDII
    lineChartTaxedataDII  = makeLineChartData(getYears(minTaxeYear), mainLabel, label, [23,2,12,3]);
    taxe_apprentissageLineChartDII = makeLineChart("line-area_taxeApprentissageDII",lineChartTaxedataDII);

    // taxe_apprentissage chartDAE
    lineChartTaxedataDAE  = makeLineChartData(getYears(minTaxeYear), mainLabel, label, [23,2,12,3]);
    taxe_apprentissageLineChartDAE = makeLineChart("line-area_taxeApprentissageDAE",lineChartTaxedataDAE);

    // taxe_apprentissage chartDMS
    lineChartTaxedataDMS  = makeLineChartData(getYears(minTaxeYear), mainLabel, label, [23,2,12,3]);
    taxe_apprentissageLineChartDMS = makeLineChart("line-area_taxeApprentissageDMS",lineChartTaxedataDMS);

    // taxe_apprentissage chartDEE
    lineChartTaxedataDEE  = makeLineChartData(getYears(minTaxeYear), mainLabel, label, [23,2,12,3]);
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
        myLineChart2 = makeBarChart("line-area2",lineChartInterndata2);

        // apprentissage chart1
        apprentissageLineChart1.destroy();
        apprentissageLineChart1 = makeLineChart("line-area-apprentissage1",lineChartApprendata1);

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
        if($(this).text()==="Forum" || $(this).text()==="Conférence" || $(this).text()==="Taxe d'apprentissage") {
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
    })
});
