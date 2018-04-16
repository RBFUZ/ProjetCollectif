var dtable = $("#data_table").DataTable({
    language: {
        "emptyTable": "No result"
    },
    // ajax:{
    //     "url":"/search_enterprise",
    //     "type":"post",
    //     "data":
    //         function ( d ) {
    //             d.nom_enterprise = $("input[name='nom_enterprise']").val();
    //         },
    //     "complete": function(data) {
    //         // $("#list_cities").empty();
    //         // console.log(data["responseJSON"].data[0]);
    //         // var d = data["responseJSON"].data;
    //         // for(var i = 0;i<d.length;i++){
    //         //     $("#list_cities").append('<div class="item"  data-value="'+d[i].idAdresse.idVille.id+'">'+d[i].idAdresse.idVille.nomVille+'</div>');
    //         // }
    //     }
    // },
    columns: [

        {data: 'nomEtablissement'},
        {data: 'numSiret'},
        {data: "idAdresse.idVille.nomVille"},
    ],


    filter: false,
    info: false,
    ordering: true,
    processing: true,
    retrieve: true,

});