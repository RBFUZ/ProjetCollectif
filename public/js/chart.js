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
    if (document.getElementById(canvas) != null)
    {
        var ctx = document.getElementById(canvas).getContext('2d');
        var lineChart = new Chart(ctx, chartData);

        return lineChart;
    }
    else {
        return null;
    }
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
    var year = new Date().getFullYear();
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

$(document).ready(function () {
   var minStageYear = getInformationFromController("/establishment/minStageYear");
   var countStageEachYear = getInformationFromController("/establishment/countStageEachYear/all")
   var minApprenticeshipYear = getInformationFromController("/establishment/minApprentissageYear");
   var minTaxeYear = getInformationFromController("/establishment/minTaxeYear");

    // stage chart1
    lineChartInterndata1 = makeLineChartData(getYears(minStageYear), "Nombre de stagiaires / an", "Nombre de stagiaires", countStageEachYear);
    myLineChart1 = makeLineChart("line-area1",lineChartInterndata1);

    // stage chart2
    lineChartInterndata2 = makeBarChartData(getYears(minStageYear), getInformationFromController("/establishment/countStageMoneyEachYear/all"), countStageEachYear);
    myLineChart2 = makeBarChart("line-area2",lineChartInterndata2);

    //apprentissage chart1
    lineChartApprendata1 = makeLineChartData(getYears(minApprenticeshipYear), "Nombre d'apprentis / an", "Nombre d'apprentis", getInformationFromController("/establishment/countApprenticeshipEachYear/all"));
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

    // Get the list of all department
    var list_departments = getInformationFromController("/establishment/list_department");

    var arrayLength = list_departments.length;
    var lineChartTaxeArray = [];
    var taxe_apprentissageLineChartArray = [];

    // All taxe_apprentissage department
    for (var i = 0; i < arrayLength; i++) {
        lineChartTaxeArray.push(makeLineChartData(getYears(minTaxeYear), mainLabel, label, getInformationFromController("/establishment/countTaxeEachYear/"+list_departments[i].libelleDepartement)));
        taxe_apprentissageLineChartArray.push(makeLineChart("line-area_taxeApprentissage"+list_departments[i].libelleDepartement,lineChartTaxeArray[i]));
    }

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
        if (taxe_apprentissageLineChartTotal != null)
        {
            taxe_apprentissageLineChartTotal.destroy();
            taxe_apprentissageLineChartTotal = makeLineChart("line-area_taxeApprentissageTotal",lineChartTaxedataTotal);
        }

        // All taxe_apprentissage department
        for (var i = 0; i < arrayLength; i++) {
            if (taxe_apprentissageLineChartArray[i] != null)
            {
                taxe_apprentissageLineChartArray[i].destroy();
                taxe_apprentissageLineChartArray[i] = makeLineChart("line-area_taxeApprentissage"+list_departments[i].libelleDepartement, lineChartTaxeArray[i]);
            }
        }

        // disable the department select for forum and conference
        if($(this).text()==="Forum" || $(this).text()==="Conférence" || $(this).text()==="Taxe d'apprentissage") {
            $("#hide_dropdown_depart").hide();
        }
        else{
            $("#hide_dropdown_depart").show();
        }
    });

    // department change
    $("select[name='depart']").change(function () {
        var depart = $(this).val();

        // change data chart stage 1
        myLineChart1.destroy();
        var countStageEachYear = getInformationFromController("/establishment/countStageEachYear/" + depart);
        lineChartInterndata1 = makeLineChartData(getYears(minStageYear), "Nombre de stagiaires / an", "Nombre de stagiaires", countStageEachYear);
        myLineChart1 = makeLineChart("line-area1",lineChartInterndata1);

        // change data chart stage 2
        myLineChart2.destroy();
        lineChartInterndata2 = makeBarChartData(getYears(minStageYear), getInformationFromController("/establishment/countStageMoneyEachYear/" + depart), countStageEachYear);
        myLineChart2 = makeBarChart("line-area2",lineChartInterndata2);

        // change data chart apprentissage 1
        apprentissageLineChart1.destroy();
        lineChartApprendata1 = makeLineChartData(getYears(minApprenticeshipYear), "Nombre d'apprentis / an", "Nombre d'apprentis", getInformationFromController("/establishment/countApprenticeshipEachYear/" + depart));
        apprentissageLineChart1 = makeLineChart("line-area-apprentissage1",lineChartApprendata1);
    })
});
