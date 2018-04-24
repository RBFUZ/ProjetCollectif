var dtable_intern = $("#data_table_intern").DataTable({
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

var dtable_apprenti = $("#data_table_apprenti").DataTable({
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

var dtable_intervenant = $("#data_table_intervenant").DataTable({
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

        {data: 'idContactEtablissement.idPersonne.nom'},
        {data: 'idContactEtablissement.idPersonne.prenom'},
        {data: "sujetConference"},
        {data: "dateConference"},
        {data: 'idContactEtablissement.mailProfessionnel'},
    ],


    filter: false,
    info: false,
    ordering: true,
    processing: true,
    retrieve: true,

});
